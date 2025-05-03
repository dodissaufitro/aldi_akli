<?php

namespace App\Filament\Resources\AkliResource\Pages;

use App\Filament\Resources\AkliResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAklis extends ListRecords
{
    protected static string $resource = AkliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
