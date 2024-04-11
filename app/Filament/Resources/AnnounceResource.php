<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnnounceResource\Pages;
use App\Models\Announce;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Closure;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Support\Str;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Set;
use Filament\Support\Enums\ActionSize;
use Filament\Tables\Columns\IconColumn\IconColumnSize;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use FilamentTiptapEditor\TiptapEditor;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class AnnounceResource extends Resource
{
    protected static ?string $model = Announce::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationGroup = 'Announces & events';
    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                Forms\Components\Section::make('Initial')->schema([
                    Fieldset::make('Title & Slug (Autogen)')->schema([
                        Forms\Components\TextInput::make('title')
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->reactive()
                            ->live(true)
                            ->required(),
                        Forms\Components\TextInput::make('slug')
                            ->required(),
                    ]),
                ]),


                Forms\Components\Section::make('Fill the body ')->schema([
                    // TinyEditor::make('body')->required(),
                    TiptapEditor::make('body')->required()->columnSpanFull(),
                    // TinyEditor::make('body')->showMenuBar()->minHeight(300),
                    Forms\Components\TextInput::make('meta_keywords')->helperText('(Comma-seprated) Optional')

                ]),
                Section::make("Additional Info")->schema([
                    Forms\Components\Select::make('announce_type')
                        ->options(
                            [
                                'avis' => 'Avis Aux Etudiants',
                                'emploi' => 'Emploi du temps',
                                'changement_filiere' => 'Changement de filiere',
                                'announce-simple'=>'Announce Simple'
                            ]
                        ),
                    Forms\Components\Select::make('status')
                        ->options(
                            [
                                'published' => 'Published',
                                'draft' => 'Draft',
                            ]
                        ),
                                        
                ])->columns('2'),
//    Tabs::make('Tabs')
//     ->tabs([
//         Tabs\Tab::make('Tab 1')
//             ->schema([
//                 // ...
//             ]),
//         Tabs\Tab::make('Tab 2')
//             ->schema([
//                 // ...
//             ]),
//         Tabs\Tab::make('Tab 3')
//             ->schema([
//                 // ...
//             ]),
//         ]),
                Section::make()->schema(
                    [

                        Forms\Components\Toggle::make('make_first')
                            ->label('Make First')
                            ->helperText('If True, the announce WIll Appear FIrst on update'),
                        Forms\Components\Toggle::make('isFeatured')
                            ->label('Featured')
                            ->helperText('If Marked as Featured, the Announce Will Appear in Other Pages sidebar'),
                    ]
                )->columns('2')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->defaultGroup('status')
            ->columns([


                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),

                Tables\Columns\IconColumn::make('isFeatured')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')->toggleable()
                    ->color(fn (string $state): string => match ($state) {
                        '1' => 'success',
                        '0' => 'danger'
                    })->boolean()->size(IconColumnSize::Medium),
                // ]),


                Tables\Columns\TextColumn::make('body')
                    ->words(20)
                    ->limit(20)
                    ->copyable()
                    ->wrap()
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();

                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }
                        return strip_tags($state);
                    })
                    ->html()
                    ->toggleable(),
                    Tables\Columns\TextColumn::make('views_count')->label('Views'),

                Tables\Columns\TextColumn::make('created_at')
                    ->since()
                    ->sortable()
                    ->toggleable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'draft' => 'gray',
                        'published' => 'success',
                    })
                    ->sortable()
                    ->toggleable()
                    ->searchable(),

            ])
            ->filters([
                Filter::make('is_featured')
                    ->query(fn (Builder $query): Builder => $query->where('isFeatured', '1')),

                SelectFilter::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                    ])
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])->size(ActionSize::Small),

                // ...

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
            'index' => Pages\ListAnnounces::route('/'),
            'create' => Pages\CreateAnnounce::route('/create'),
            'edit' => Pages\EditAnnounce::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
