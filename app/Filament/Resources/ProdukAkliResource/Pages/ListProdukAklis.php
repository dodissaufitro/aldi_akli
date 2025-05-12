<?php

namespace App\Filament\Resources\ProdukAkliResource\Pages;

use App\Filament\Resources\ProdukAkliResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProdukAklis extends ListRecords
{
    protected static string $resource = ProdukAkliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
