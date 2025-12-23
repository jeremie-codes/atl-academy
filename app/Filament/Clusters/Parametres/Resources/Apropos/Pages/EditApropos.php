<?php

namespace App\Filament\Clusters\Parametres\Resources\Apropos\Pages;

use App\Filament\Clusters\Parametres\Resources\Apropos\AproposResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditApropos extends EditRecord
{
    protected static string $resource = AproposResource::class;

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
