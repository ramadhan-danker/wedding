<?php

namespace App\Filament\Resources\Wedding3Resource\Pages;

use App\Filament\Resources\Wedding3Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWedding3s extends ManageRecords
{
    protected static string $resource = Wedding3Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
