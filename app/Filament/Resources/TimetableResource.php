<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TimetableResource\Pages;
use App\Filament\Resources\TimetableResource\RelationManagers;
use App\Models\Timetable;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TimetableResource extends Resource
{
    protected static ?string $model = Timetable::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $label = 'Timetables (EDT)';
    protected static ?string $navigationGroup = 'Faculty';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('New Time Table')->schema([
                    Group::make()->schema([
                        Forms\Components\Select::make('major_id')
                        ->relationship('major', 'label')
                        ->searchable()
                        ->required(),
                    Forms\Components\Select::make('semester')
                        ->options([
                            'S1' => 'S1',
                            'S2' => 'S2',
                            'S3' => 'S3',
                            'S4' => 'S4',
                            'S5' => 'S5',
                            'S6' => 'S6'
                        ])
                        ->required(),
                        Forms\Components\Select::make('session')
                        ->options([
                            'Automne' => 'Automne',
                            'Printemps' => 'Printemps'
                        ])
                        ->required()
                    ])->columns('3'),
                    
                    Group::make()->schema([
                        Forms\Components\FileUpload::make('file')
                        ->required()
                        ->directory('timetables'),
                    Forms\Components\Select::make('type')
                        ->options([
                            'Cours' => 'Cours',
                            'TP' => 'TP',
                            'Groupes'=>'Groupes'
                        ])
                        ->required()
                    ])->columns('2')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('major.label')
                    ->searchable(),
                Tables\Columns\TextColumn::make('semester')
                    ->searchable(),
                Tables\Columns\TextColumn::make('session')
                    ->searchable(),
                Tables\Columns\TextColumn::make('file')
                ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTimetables::route('/'),
            'create' => Pages\CreateTimetable::route('/create'),
            'edit' => Pages\EditTimetable::route('/{record}/edit'),
        ];
    }
}
