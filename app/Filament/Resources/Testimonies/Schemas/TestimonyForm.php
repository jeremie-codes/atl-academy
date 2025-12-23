<?php

namespace App\Filament\Resources\Testimonies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Nom')
                            ->required(),
                        Select::make('type')
                            ->options(['apprennant' => 'Apprennant', 'partenaire' => 'Partenaire', 'autre' => 'Autre'])
                            ->required(),
                        FileUpload::make('image')
                            ->columnSpanFull()
                            ->label('Photo de profil (optionnel)')
                            ->directory('testimonies')
                            ->disk('public')
                            ->maxSize(4096)
                            ->image(),
                        RichEditor::make('description')
                            ->columnSpanFull()
                            ->required(),
                    ])
            ]);
    }
}
