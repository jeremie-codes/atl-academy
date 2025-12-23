<?php

namespace App\Filament\Resources\Partenaires\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PartenaireForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Partenaires')
                    ->label('Partenaires')
                    //->addActionLabel('Ajouter un partenaire')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nom')
                            ->placeholder('Nom du partenaire')
                            ->default(null),
                        FileUpload::make('image')
                            ->directory('partenaires')
                            ->disk('public')
                            ->maxSize(4096)
                            ->image()
                            ->required(),
                    ])
            ]);
    }
}
