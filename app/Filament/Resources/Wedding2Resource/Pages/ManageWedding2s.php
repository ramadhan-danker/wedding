<?php

namespace App\Filament\Resources\Wedding2Resource\Pages;

use App\Filament\Resources\Wedding2Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWedding2s extends ManageRecords
{
    protected static string $resource = Wedding2Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
