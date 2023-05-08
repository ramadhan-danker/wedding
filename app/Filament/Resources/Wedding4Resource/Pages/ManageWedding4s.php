<?php

namespace App\Filament\Resources\Wedding4Resource\Pages;

use App\Filament\Resources\Wedding4Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageWedding4s extends ManageRecords
{
    protected static string $resource = Wedding4Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
