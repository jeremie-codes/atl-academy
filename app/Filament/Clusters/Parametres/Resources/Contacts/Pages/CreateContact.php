<?php

namespace App\Filament\Clusters\Parametres\Resources\Contacts\Pages;

use App\Filament\Clusters\Parametres\Resources\Contacts\ContactResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
