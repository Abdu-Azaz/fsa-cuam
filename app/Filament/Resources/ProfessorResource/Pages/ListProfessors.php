<?php

namespace App\Filament\Resources\ProfessorResource\Pages;

use App\Filament\Resources\ProfessorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use  EightyNine\ExcelImport\ExcelImportAction;
use Filament\Tables\Actions\ButtonAction;

class ListProfessors extends ListRecords
{
    protected static string $resource = ProfessorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),

        ];
    }
}
