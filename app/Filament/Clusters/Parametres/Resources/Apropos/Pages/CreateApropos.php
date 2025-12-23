<?php

namespace App\Filament\Clusters\Parametres\Resources\Apropos\Pages;

use App\Filament\Clusters\Parametres\Resources\Apropos\AproposResource;
use Filament\Resources\Pages\CreateRecord;

class CreateApropos extends CreateRecord
{
    protected static string $resource = AproposResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
