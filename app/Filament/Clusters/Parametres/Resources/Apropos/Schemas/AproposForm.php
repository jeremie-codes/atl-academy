<?php

namespace App\Filament\Clusters\Parametres\Resources\Apropos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\RichEditor;

class AproposForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('')
                    ->columnSpanFull()
                    ->schema([
                        FileUpload::make('image')
                            ->label('Image')
                            ->directory('apropos')
                            ->disk('public')
                            ->maxSize(4096)
                            ->image(),
                        TextInput::make('subtitle')
                            ->label('Sous-titre')
                            ->default(null),
                        RichEditor::make('description')
                            ->required()
                            ->default(null)
                            ->columnSpanFull()
                    ])
            ]);
    }
}
