<?php

namespace App\Filament\Resources\HowtoResource\Pages;

use App\Filament\Resources\HowtoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHowtos extends ManageRecords
{
    protected static string $resource = HowtoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
