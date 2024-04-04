<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Exports\MajorExporter;
use App\Filament\Imports\MajorImporter;
use App\Filament\Resources\MajorResource\Pages;
use App\Filament\Resources\MajorResource\RelationManagers;
use App\Models\Major;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Actions\ImportAction;
use Filament\Tables\Table;

class MajorResource extends Resource
{
    protected static ?string $model = Major::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Faculty';
    protected static ?string $label = 'Filières';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Initial Info')->schema([
                    TextInput::make('label')->columnSpan('full'),

                    Select::make('department_id')
                        ->relationship('department', 'name'),
                    Select::make('diploma')
                        ->options([
                            'Licence ST' => 'Licence ST',
                            'Licence Professionnelle' => 'Licence Professionnelle',
                            'Master' => 'Master',
                            'Formation Continue' => 'Formation Continue',
                        ]),
                    Forms\Components\Select::make('professor_id')
                        ->label('Coordinator')
                        ->relationship('professor', 'full_name')->searchable(),
                ])->columns('3'),
                Section::make('Body of the programme')
                    ->schema([
                        TinyEditor::make('description')
                            ->fileAttachmentsDirectory('majors')
                            ->profile('full'),
                        FileUpload::make('pdf_file')->label('File (Optional: Either fill the box above or upload the file if you already have it)')
                            ->directory('majors')
                            ->acceptedFileTypes(['pdf', 'docx', 'ppt', 'pptx', 'doc'])
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->headerActions([
            ImportAction::make()
                ->importer(MajorImporter::class)
        ])
            ->columns([
                Tables\Columns\TextColumn::make('label')
                    ->searchable(),
                Tables\Columns\TextColumn::make('department.name')
                    ->label('Department')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('professor.full_name')
                    ->label('Coordinator')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable()->since(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->since()
                    ->sortable()->toggleable(),
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
                    ExportBulkAction::make()
                        ->exporter(MajorExporter::class)
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
            'index' => Pages\ListMajors::route('/'),
            'create' => Pages\CreateMajor::route('/create'),
            'edit' => Pages\EditMajor::route('/{record}/edit'),
        ];
    }
}
