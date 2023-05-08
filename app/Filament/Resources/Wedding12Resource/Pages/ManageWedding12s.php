<?php

namespace App\Filament\Resources\Wedding12Resource\Pages;

use App\Filament\Resources\Wedding12Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWedding12s extends ManageRecords
{
    protected static string $resource = Wedding12Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
