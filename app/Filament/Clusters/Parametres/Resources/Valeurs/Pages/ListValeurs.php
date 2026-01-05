<?php

namespace App\Filament\Clusters\Parametres\Resources\Valeurs\Pages;

use App\Filament\Clusters\Parametres\Resources\Valeurs\ValeursResource;
use App\Models\Valeur;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListValeurs extends ListRecords
{
    protected static string $resource = ValeursResource::class;

    protected function getHeaderActions(): array
    {
        return Valeur::count() < 3 ? [CreateAction::make()->label('Nouvelle valeur')->icon('heroicon-o-plus')] : [];
    }
}
