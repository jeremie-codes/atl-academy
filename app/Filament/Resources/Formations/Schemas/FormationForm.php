<?php

namespace App\Filament\Resources\Formations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FormationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Titre de la formation')
                            ->required(),
                        Select::make('category_id')
                            ->placeholder('-- Choisir Catégorie --')
                            ->relationship('category', 'name')
                            ->required(),
                        FileUpload::make('image')
                            ->columnSpanFull()
                            ->image()
                            ->directory('formations')
                            ->disk('public')
                            ->maxSize(4096)
                            ->required(),
                        RichEditor::make('description')
                            ->label('Description de la formation (Max 1000 caractères)')
                            ->maxLength(1000)
                            ->columnSpanFull()
                            ->required(),
                        
                    ])
                ]);
    }
}
