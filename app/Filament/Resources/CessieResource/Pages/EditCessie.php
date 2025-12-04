<?php

namespace App\Filament\Resources\CessieResource\Pages;

use App\Filament\Resources\CessieResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCessie extends EditRecord
{
    protected static string $resource = CessieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
