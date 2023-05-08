<?php

namespace App\Filament\Resources\Wedding9Resource\Pages;

use App\Filament\Resources\Wedding9Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWedding9s extends ManageRecords
{
    protected static string $resource = Wedding9Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
