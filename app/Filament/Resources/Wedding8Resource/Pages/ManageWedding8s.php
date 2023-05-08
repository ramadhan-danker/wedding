<?php

namespace App\Filament\Resources\Wedding8Resource\Pages;

use App\Filament\Resources\Wedding8Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWedding8s extends ManageRecords
{
    protected static string $resource = Wedding8Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
