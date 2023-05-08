<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Tema;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Livewire\TemporaryUploadedFile;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\Layout\Panel;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TemaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TemaResource\RelationManagers;

class TemaResource extends Resource
{
    protected static ?string $model = Tema::class;

    protected static ?string $navigationIcon = 'heroicon-s-template';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->maxLength(255)->label('Nama tema'),
                TextInput::make('url_demo')->required()->maxLength(255)->label('Url Demo'),
                TextInput::make('url_tambah_data')->required()->maxLength(255)->label('Url Tambah Data'),
                Select::make('kategori_id')->relationship('kategori', 'name'),
                FileUpload::make('image')
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        return (string) str($file->getClientOriginalName())->prepend('images/');
                    })->image()->deleteUploadedFileUsing(function ($file) {
                        Storage::disk('public')->delete($file);
                    })->image()->label('Gambar')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->weight('bold')->searchable()->label('Nama Tema')->alignCenter(),
                Panel::make([
                    Tables\Columns\ImageColumn::make('image')->size('100%'),
                ]),
            ])
            ->contentGrid([
                'md' => 1,
                'xl' => 2,
            ])
            ->filters([
                SelectFilter::make('kategori')->relationship('kategori', 'name')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Action::make('Demo')
                    ->url(fn (Tema $record): string => $record->url_demo)
                    ->color('secondary')
                    ->icon('heroicon-s-eye'),
                Action::make('Pilih Tema')
                    ->url(fn (Tema $record): string => $record->url_tambah_data)
                    ->color('success')
                    ->icon('heroicon-s-plus-circle')
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTemas::route('/'),
        ];
    }
}
