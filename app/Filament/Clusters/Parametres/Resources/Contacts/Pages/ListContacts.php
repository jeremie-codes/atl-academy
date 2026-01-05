<?php

namespace App\Filament\Clusters\Parametres\Resources\Contacts\Pages;

use App\Filament\Clusters\Parametres\Resources\Contacts\ContactResource;
use App\Models\Contact;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return Contact::count() < 1 ? [CreateAction::make()->label('Ajouter un contact')->icon('heroicon-o-plus')] : [];
    }
}
