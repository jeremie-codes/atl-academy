<?php

namespace App\Filament\Resources\Inscriptions\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InscriptionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        Select::make('formation_id')
                            ->label('Formation')
                            ->placeholder('-- Choisir formation --')
                            ->relationship('formation', 'title')
                            ->required(),
                        TextInput::make('full_name')
                            ->label('Nom complet')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        TextInput::make('phone')
                            ->label('Téléphone')
                            ->placeholder('243 000 000 000')
                            ->minLength(12)
                            ->maxLength(12)
                            ->tel()
                            ->required(),
                        RichEditor::make('note')
                            ->label('Notes (optionnel)')
                            ->columnSpanFull(),
                    ])
            ]);
    }
}
