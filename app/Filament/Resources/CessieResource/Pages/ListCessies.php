<?php

namespace App\Filament\Resources\CessieResource\Pages;

use App\Filament\Resources\CessieResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCessies extends ListRecords
{
    protected static string $resource = CessieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
