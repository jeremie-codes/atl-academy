<?php

namespace App\Filament\Clusters\Parametres\Resources\Apropos\Pages;

use App\Filament\Clusters\Parametres\Resources\Apropos\AproposResource;
use App\Models\Apropos;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListApropos extends ListRecords
{
    protected static string $resource = AproposResource::class;

    protected function getHeaderActions(): array
    {
        return Apropos::count() < 1 ? [CreateAction::make()->label('Configurer')] : [];
    }
}
