<?php

namespace App\Filament\Resources\Wedding6Resource\Pages;

use App\Filament\Resources\Wedding6Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWedding6s extends ManageRecords
{
    protected static string $resource = Wedding6Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
