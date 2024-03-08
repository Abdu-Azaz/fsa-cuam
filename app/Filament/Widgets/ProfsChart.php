<?php
/*
namespace App\Filament\Widgets;

use App\Models\Department;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Str;
class ProfsChart extends ChartWidget
{
    protected static ?string $heading = '# of Profs per Department';

    protected function getData(): array
    {
        $departments = Department::all();
        $labels = [];

        foreach($departments as $department)
        {
            array_push($labels,preg_replace('/\b(\w)|./', '$1', $department->name));
        }
        return [
            'datasets' => [
                [
                    'label' => 'Professor # per department',
                    'data' => [9, 20, 33, 23, 43],
                ],
            ],
            'labels' => $labels,
        ];

    }

    protected function getType(): string
    {
        return 'bar';
    }
}
*/



namespace App\Filament\Widgets;

use App\Models\Department;
use App\Models\Professor;
use Filament\Widgets\ChartWidget;

class ProfsChart extends ChartWidget
{
    protected static ?string $heading = 'Number of Professors per Department';

    protected function getData(): array
    {
        // Retrieve all departments and professors
        $departments = Department::all();
        $professorsCount = [];

        // Iterate through departments and count professors for each
        foreach ($departments as $department) {
            $professorCount = Professor::where('department_id', $department->id)->count();
            $professorsCount[] = $professorCount;
            // echo "FFF";
        }

        // Generate acronyms from department names
        $acronyms = array_map(function ($department) {
            return $this->generateAcronym($department->name);
        }, $departments->all());

        return [
            'datasets' => [
                [
                    'label' => 'Number of Professors',
                    'data' => $professorsCount,
                    'backgroundColor' => '#000077', // Adjust the color as needed
                ],
            ],
            'labels' => $acronyms,
            'yAxisOptions' => [
                'ticks' => [
                    'stepSize' => 1, // Set the step size to 1 for whole numbers on the y-axis
                ],
            ],
        ];
        
    }

    protected function getType(): string
    {
        return 'bar';
    }

    private function generateAcronym(string $name): string
    {
        // List of words to exclude from the acronym
        $excludeWords = ['et', 'de', 'des'];

        // Split the name into words
        $words = explode(' ', $name);

        // Generate acronym excluding specified words
        $acronym = '';
        foreach ($words as $word) {
            // Convert the word to lowercase for case-insensitive comparison
            $lowercaseWord = mb_strtolower($word, 'UTF-8');

            // Check if the word should be excluded
            if (!in_array($lowercaseWord, $excludeWords)) {
                // $acronym .= strtoupper(substr($word, 0, 1));
                $acronym .= strtoupper(substr($word, 0, 1)) . '.';
            }
        }

        return $acronym;
    }
}

