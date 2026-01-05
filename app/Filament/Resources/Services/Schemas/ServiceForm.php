<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('nom')
                            ->label('Nom du service')
                            ->required(),
                        TextInput::make('url')
                            ->label('URL du service')
                            ->required(),
                        FileUpload::make('image')
                            ->label('Image (optionnel)')
                            ->columnSpanFull()
                            ->image()
                            ->directory('services')
                            ->disk('public')
                            ->maxSize(4096),
                        RichEditor::make('description')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                                ['h2', 'h3', 'alignJustify', 'alignStart', 'alignCenter', 'alignEnd'],
                                ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                ['table'],
                                ['undo', 'redo'],
                            ])

                            ->label('Description du service (Max 1000 caractères)')
                            ->maxLength(1000)
                            ->columnSpanFull()
                            ->required(),

                    ])
            ]);
    }
}
