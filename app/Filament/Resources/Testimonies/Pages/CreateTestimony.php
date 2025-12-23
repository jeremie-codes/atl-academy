<?php

namespace App\Filament\Resources\Testimonies\Pages;

use App\Filament\Resources\Testimonies\TestimonyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTestimony extends CreateRecord
{
    protected static string $resource = TestimonyResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
