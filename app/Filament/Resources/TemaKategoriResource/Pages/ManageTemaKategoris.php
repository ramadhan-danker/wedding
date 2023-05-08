<?php

namespace App\Filament\Resources\TemaKategoriResource\Pages;

use App\Filament\Resources\TemaKategoriResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTemaKategoris extends ManageRecords
{
    protected static string $resource = TemaKategoriResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
