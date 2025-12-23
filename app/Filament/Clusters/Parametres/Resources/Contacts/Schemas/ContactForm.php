<?php

namespace App\Filament\Clusters\Parametres\Resources\Contacts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->description('NB: - Le contact que vous avez créé en premier est le contact principal')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('email')
                            ->label('Email address')
                            ->placeholder('adresse@test.com')
                            ->email()
                            ->required(),
                        TextInput::make('phone')
                            ->tel()
                            ->placeholder('243 000 000 000')
                            ->minLength(12)
                            ->maxLength(12)
                            ->required(),
                        Textarea::make('address')
                            ->required(),
                    ])
            ]);
    }
}
