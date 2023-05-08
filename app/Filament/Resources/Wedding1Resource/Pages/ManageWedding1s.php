<?php

namespace App\Filament\Resources\Wedding1Resource\Pages;

use Filament\Pages\Actions;
use Livewire\TemporaryUploadedFile;
use Filament\Forms\Components\Textarea;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\Wedding1Resource;
use Filament\Forms\Components\DateTimePicker;
use Symfony\Contracts\Service\Attribute\Required;

class ManageWedding1s extends ManageRecords
{
    protected static string $resource = Wedding1Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
