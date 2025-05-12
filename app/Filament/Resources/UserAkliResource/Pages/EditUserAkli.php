<?php

namespace App\Filament\Resources\UserAkliResource\Pages;

use App\Filament\Resources\UserAkliResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserAkli extends EditRecord
{
    protected static string $resource = UserAkliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
