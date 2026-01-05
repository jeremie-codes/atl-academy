<?php

namespace App\Filament\Clusters\Parametres\Resources\Valeurs\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ValeursForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->description('NB: Ajouter jusqu\'à 3 valeurs')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('titre')
                            ->label('Titre')
                            ->placeholder('Titre de la valeur')
                            ->required(),
                        Textarea::make('description')
                            ->label('Description')
                            ->placeholder('Description de la valeur')
                            ->required()
                    ])
            ]);
    }
}
