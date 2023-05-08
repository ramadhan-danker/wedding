<?php

namespace App\Filament\Resources\Wedding11Resource\Pages;

use App\Filament\Resources\Wedding11Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWedding11s extends ManageRecords
{
    protected static string $resource = Wedding11Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
