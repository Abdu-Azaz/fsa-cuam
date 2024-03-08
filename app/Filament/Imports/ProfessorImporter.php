<?php

namespace App\Filament\Imports;

use App\Models\Professor;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class ProfessorImporter extends Importer
{
    protected static ?string $model = Professor::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('full_name')
                ->requiredMapping()
                ->rules(['required', 'max:100']),
            ImportColumn::make('isHead')
                ->requiredMapping()
                ->boolean()
                ->rules(['required', 'boolean']),
            ImportColumn::make('department_id')
                ->requiredMapping()
                ->numeric()
                ->rules(['required', 'integer']),
        ];
    }

    public function resolveRecord(): ?Professor
    {
        // return Professor::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new Professor();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your professor import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
