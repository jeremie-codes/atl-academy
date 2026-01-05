<?php

namespace App\Filament\Clusters\Parametres\Resources\Valeurs\Pages;

use App\Filament\Clusters\Parametres\Resources\Valeurs\ValeursResource;
use Filament\Resources\Pages\CreateRecord;

class CreateValeurs extends CreateRecord
{
    protected static string $resource = ValeursResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
