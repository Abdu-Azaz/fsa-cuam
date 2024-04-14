<?php

namespace App\Filament\Imports;

use App\Models\Student;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class StudentImporter extends Importer
{
    protected static ?string $model = Student::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('prenom')
                ->requiredMapping()
                ->rules(['required', 'max:60']),
            ImportColumn::make('nom')
                ->requiredMapping()
                ->rules(['required', 'max:60']),
            ImportColumn::make('cne')
                ->requiredMapping()
                ->rules(['required', 'max:11']),
            ImportColumn::make('cin')
                ->requiredMapping()
                ->rules(['required', 'max:10']),
            ImportColumn::make('apogee')
                ->rules(['max:10']),
            ImportColumn::make('filiere')
                ->requiredMapping()
                ->rules(['required', 'max:40']),
            ImportColumn::make('date_naissance')
                ->requiredMapping()
                ->rules(['required', 'date']),
            ImportColumn::make('annee')
                ->requiredMapping()
                ->rules(['required', 'max:4']),
            ImportColumn::make('actif')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
        ];
    }

    public function resolveRecord(): ?Student
    {
        // return Student::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new Student();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your student import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
