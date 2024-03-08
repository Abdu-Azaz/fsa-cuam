<?php

namespace App\Filament\Resources;

use App\Filament\Exports\ProfessorExporter;
use App\Filament\Imports\ProfessorImporter;
use App\Filament\Resources\ProfessorResource\Pages;
use App\Models\Professor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup as ActionsActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use App\Filament\Resources\ProfessorResource\RelationManagers\DepartmentsRelationManager;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Actions\ImportAction;
use Filament\Tables\Columns\IconColumn\IconColumnSize;

class ProfessorResource extends Resource
{
    protected static ?string $model = Professor::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Faculty';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Professor\'s Info')->schema([
                    Forms\Components\TextInput::make('full_name')
                        ->required(),
                    Forms\Components\Select::make('department_id')
                        ->relationship('department', 'name')
                        ->required()
                        ->label('Department (Select)'),
                    Forms\Components\Toggle::make('isHead')
                        ->label('Head of department?')
                        ->helperText('Is this professor the head of department?'),
                        ])->columns('3'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->headerActions([
            ImportAction::make()
                ->importer(ProfessorImporter::class)])
            ->columns([

                TextColumn::make('id')
                    ->label('#')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('full_name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('department.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\IconColumn::make('isHead')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-no-symbol')->toggleable()
                    ->color(fn (string $state): string => match ($state) {
                        '1' => 'success',
                        '0' => 'secondary'
                    })->boolean()->size(IconColumnSize::Large),
            ])
            ->filters([
                SelectFilter::make('department')->label('department')
                    ->relationship('department', 'name')
            ])
            ->actions([
                ActionsActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])->size(ActionSize::Small)
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make()
                        ->exporter(ProfessorExporter::class)
                ]),

            ]);
    }

    public static function getRelations(): array
    {
        return [
            DepartmentsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfessors::route('/'),
            'create' => Pages\CreateProfessor::route('/create'),
            'edit' => Pages\EditProfessor::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
