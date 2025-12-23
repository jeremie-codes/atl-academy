<?php

namespace App\Filament\Resources\Galeries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class GaleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('')
                    ->columnSpanFull()
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('galeries')
                            ->disk('public')
                            ->maxSize(4096)
                            ->required(),
                    ])
            ]);
    }
}
