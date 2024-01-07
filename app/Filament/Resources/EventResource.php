<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;

use App\Models\Event;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Support\Str;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-bell';
    protected static ?string $navigationGroup = 'Announces & events';
    protected static ?int $sort = 3;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                    Section::make('Basic Info')->schema([
                        Forms\Components\TextInput::make('title')
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->reactive()
                            ->live(true)
                            ->required(),
                        Forms\Components\TextInput::make('slug')
                            ->required(),
                    ])->columns('2'),
                Section::make('Cover')->schema([
                    Forms\Components\FileUpload::make('event_cover')
                        ->directory("events")
                        ->image()
                        ->imageEditor()
                        
                        ->required(),
                ]),
                Section::make('Date & Time')->schema([
                    Forms\Components\DateTimePicker::make('datetime')
                    ->seconds(false)  ->prefix('Starts at')
                    
                    ,
                    
                    Forms\Components\TextInput::make('location')

                ])->columns('2'),
                TinyEditor::make('body')->required(),
            ])->columns('1');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('title')
            ->emptyStateHeading('Please create an event!')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('event_cover')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->sortable()
                    ->since()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('datetime')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'slug', 'body'];
    }
}
