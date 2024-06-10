<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ImageBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('image')
            ->schema([
                // Repeater::make('images')->schema([
                    FileUpload::make('image')->directory('awesome-images-rust')->image()->imageEditor()
                // ])
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}