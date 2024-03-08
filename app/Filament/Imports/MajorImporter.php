<?php

namespace App\Filament\Imports;

use App\Models\Major;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class MajorImporter extends Importer
{
    protected static ?string $model = Major::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('label')
                ->requiredMapping()
                ->rules(['required', 'max:70']),
            ImportColumn::make('professor_id')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('department_id')
                ->numeric()
                ->rules(['integer']),
            ImportColumn::make('diploma')
                ->requiredMapping()
                ->rules(['required', 'max:40']),
            ImportColumn::make('description'),
            ImportColumn::make('pdf_file')
                ->rules(['max:255']),
        ];
    }

    public function resolveRecord(): ?Major
    {
        // return Major::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new Major();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your major import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
