<?php

namespace App\Filament\Clusters\Parametres\Resources\Valeurs\Pages;

use App\Filament\Clusters\Parametres\Resources\Valeurs\ValeursResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditValeurs extends EditRecord
{
    protected static string $resource = ValeursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
