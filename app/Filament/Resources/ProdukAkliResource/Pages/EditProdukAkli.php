<?php

namespace App\Filament\Resources\ProdukAkliResource\Pages;

use App\Filament\Resources\ProdukAkliResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProdukAkli extends EditRecord
{
    protected static string $resource = ProdukAkliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
