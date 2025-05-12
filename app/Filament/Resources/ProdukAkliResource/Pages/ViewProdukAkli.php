<?php

namespace App\Filament\Resources\ProdukAkliResource\Pages;

use App\Filament\Resources\ProdukAkliResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProdukAkli extends ViewRecord
{
    protected static string $resource = ProdukAkliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
