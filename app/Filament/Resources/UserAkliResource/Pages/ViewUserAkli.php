<?php

namespace App\Filament\Resources\UserAkliResource\Pages;

use App\Filament\Resources\UserAkliResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUserAkli extends ViewRecord
{
    protected static string $resource = UserAkliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
