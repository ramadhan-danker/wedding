<?php

namespace App\Filament\Resources\Wedding5Resource\Pages;

use App\Filament\Resources\Wedding5Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWedding5s extends ManageRecords
{
    protected static string $resource = Wedding5Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
