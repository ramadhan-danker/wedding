<?php

namespace App\Filament\Resources\Wedding13Resource\Pages;

use App\Filament\Resources\Wedding13Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWedding13s extends ManageRecords
{
    protected static string $resource = Wedding13Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
