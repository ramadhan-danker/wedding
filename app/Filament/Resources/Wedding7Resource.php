<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Wedding7;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Livewire\TemporaryUploadedFile;
use Filament\Forms\Components\Wizard;
use Filament\Pages\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\DeleteAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\Wedding7Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Wedding7Resource\RelationManagers;
use App\Filament\Resources\Wedding7Resource\Pages\ManageWedding7s;

class Wedding7Resource extends Resource
{
    protected static ?string $model = Wedding7::class;

    protected static ?string $navigationIcon = 'heroicon-s-mail-open';
    protected static ?string $navigationGroup = 'Undangan Pernikahan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make()->schema([
                    Step::make('Url')->schema([
                        TextInput::make('slug')->required()->maxLength(255)->label('Custom url')
                            ->prefix('http://127.0.0.1:8000/wedding7/'),
                    ])->icon('heroicon-s-link'),

                    Step::make('Pengantin laki-laki')->schema([

                        TextInput::make('namaPanggilanPria')
                            ->required()
                            ->maxLength(255)->label('Nama Panggilan'),
                        TextInput::make('namaIbuPria')
                            ->required()
                            ->maxLength(255)->label('Nama Ibu'),
                        TextInput::make('namaBapakPria')
                            ->required()
                            ->maxLength(255)->label('Nama Bapak'),
                        TextInput::make('anakKeBerapaPria')
                            ->required()
                            ->maxLength(255)->label('Anak Ke Berapa'),
                        TextInput::make('tempatLahirPria')
                            ->required()
                            ->maxLength(255)->label('Tempat Lahir'),
                    ])->columns(2)->icon('heroicon-s-user'),
                    Step::make('Pengantin wanita')->schema([

                        TextInput::make('namaPanggilanPerempuan')
                            ->required()
                            ->maxLength(255)->label('Nama Panggilan'),
                        TextInput::make('namaBapakPerempuan')
                            ->required()
                            ->maxLength(255)->label('Nama Bapak'),
                        TextInput::make('namaIbuPerempuan')
                            ->required()
                            ->maxLength(255)->label('Nama Ibu'),
                        TextInput::make('anakKeBerapaPerempuan')
                            ->required()
                            ->maxLength(255)->label('Anak Ke Berapa'),
                        TextInput::make('tempatLahirPerempuan')
                            ->required()
                            ->maxLength(255)->label('Tempat Lahir'),
                    ])->columns(2)->icon('heroicon-s-user'),
                    Step::make('Acara')->schema([
                        TextInput::make('alamat')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('linkMap')->maxLength(255)->required(),
                        FileUpload::make('fotoSampul')
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                return (string) str($file->getClientOriginalName())->prepend('wedding7/');
                            })->image()->deleteUploadedFileUsing(function ($file) {
                                Storage::disk('public')->delete($file);
                            })->required(),
                        FileUpload::make('galery')->image()->multiple()->required()->maxFiles(6)->deleteUploadedFileUsing(function ($file) {
                            Storage::disk('public')->delete($file);
                        })->directory('wedding7'),
                        DateTimePicker::make('tanggalResepsi')
                            ->required(),
                        Textarea::make('map')->required()->label('Label(width=400, height=300)'),
                    ])->columns(2)->icon('heroicon-s-calendar')
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                Tables\Columns\TextColumn::make('namaPanggilanPria')->searchable(),
                Tables\Columns\TextColumn::make('namaPanggilanPerempuan')->searchable(),
                Tables\Columns\TextColumn::make('namaBapakPerempuan')->searchable(),
                Tables\Columns\TextColumn::make('namaIbuPerempuan')->searchable(),
                Tables\Columns\TextColumn::make('namaIbuPria')->searchable(),
                Tables\Columns\TextColumn::make('namaBapakPria')->searchable(),
                Tables\Columns\TextColumn::make('alamat')->searchable()->wrap(),
                Tables\Columns\TextColumn::make('anakKeBerapaPria'),
                Tables\Columns\TextColumn::make('anakKeBerapaPerempuan'),
                Tables\Columns\TextColumn::make('map')->wrap()->words(1),
                Tables\Columns\TextColumn::make('linkMap')->wrap(),
                Tables\Columns\ImageColumn::make('fotoSampul'),
                Tables\Columns\TextColumn::make('tanggalResepsi')
                    ->dateTime()->wrap(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->wrap(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->wrap(),
            ])

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageWedding7s::route('/'),
        ];
    }
}