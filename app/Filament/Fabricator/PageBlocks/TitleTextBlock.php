<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use FilamentTiptapEditor\TiptapEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TitleTextBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('title-text')
            ->schema([
                TextInput::make('title'),
                TiptapEditor::make('text')->directory('awesome-ruby-images')
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}