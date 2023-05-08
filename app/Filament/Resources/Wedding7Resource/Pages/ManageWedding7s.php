<?php

namespace App\Filament\Resources\Wedding7Resource\Pages;

use App\Filament\Resources\Wedding7Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWedding7s extends ManageRecords
{
    protected static string $resource = Wedding7Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
