<?php

namespace App\Filament\Resources\AkliResource\Pages;

use App\Filament\Resources\AkliResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAkli extends EditRecord
{
    protected static string $resource = AkliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
