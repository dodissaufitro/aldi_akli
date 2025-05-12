<?php

namespace App\Filament\Resources\UserAkliResource\Pages;

use App\Filament\Resources\UserAkliResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserAklis extends ListRecords
{
    protected static string $resource = UserAkliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
