<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use FilamentTiptapEditor\Extensions\Nodes\TiptapBlock;
use FilamentTiptapEditor\TiptapEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class EditorBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('editor')
            ->schema([
                TiptapEditor::make('body')->directory('awesome-rust-image'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
    
}