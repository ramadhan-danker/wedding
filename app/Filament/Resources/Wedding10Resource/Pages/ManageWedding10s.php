<?php

namespace App\Filament\Resources\Wedding10Resource\Pages;

use App\Filament\Resources\Wedding10Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWedding10s extends ManageRecords
{
    protected static string $resource = Wedding10Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
