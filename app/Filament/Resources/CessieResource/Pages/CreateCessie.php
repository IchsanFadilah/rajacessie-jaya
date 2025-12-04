<?php

namespace App\Filament\Resources\CessieResource\Pages;

use App\Filament\Resources\CessieResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCessie extends CreateRecord
{
    protected static string $resource = CessieResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
