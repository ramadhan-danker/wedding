<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Wedding6;
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
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\Wedding6Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Wedding6Resource\RelationManagers;
use App\Filament\Resources\Wedding6Resource\Pages\ManageWedding6s;

class Wedding6Resource extends Resource
{
    protected static ?string $model = Wedding6::class;

    protected static ?string $navigationIcon = 'heroicon-s-mail-open';
    protected static ?string $navigationGroup = 'Undangan Pernikahan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make()->schema([
                    Step::make('Url')->schema([
                        TextInput::make('slug')->required()->maxLength(255)->label('Custom url')
                            ->prefix('http://127.0.0.1:8000/wedding6/'),
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
                        TextInput::make('linkIgPria')
                            ->required()
                            ->maxLength(255)->label('Link IG'),
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
                        TextInput::make('linkIgPerempuan')
                            ->required()
                            ->maxLength(255)->label('Link IG'),
                    ])->columns(2)->icon('heroicon-s-user'),
                    Step::make('Acara Pemberkatan')->schema([
                        TextInput::make('alamat1')
                            ->required()
                            ->maxLength(255)->label('Alamat'),
                        TextInput::make('linkMap1')->maxLength(255)->required()->label('Link Map'),
                        DateTimePicker::make('awalTanggal1')->required()->label('Acara Awal'),
                        DateTimePicker::make('akhirTanggal1')
                            ->required()->label('Sampai'),
                    ])->columns(2)->icon('heroicon-s-calendar'),
                    Step::make('Resepsi Pernikahan')->schema([
                        TextInput::make('alamat2')
                            ->required()
                            ->maxLength(255)->label('Alamat'),
                        TextInput::make('linkMap2')->maxLength(255)->required()->label('Link Map'),
                        DateTimePicker::make('awalTanggal2')->required()->label('Acara Awal'),
                        DateTimePicker::make('akhirTanggal2')
                            ->required()->label('Sampai'),
                    ])->columns(2)->icon('heroicon-s-calendar'),
                    Step::make('Lain lain')->schema([
                        Textarea::make('map')->required()->label('Map'),
                        FileUpload::make('galery')->image()->multiple()->required()->maxFiles(6)->deleteUploadedFileUsing(function ($file) {
                            Storage::disk('public')->delete($file);
                        })->directory('wedding6')->label('Galery'),
                    ])->icon('heroicon-s-clipboard'),

                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('namaPanggilanPria'),
                Tables\Columns\TextColumn::make('namaPanggilanPerempuan'),
                Tables\Columns\TextColumn::make('namaBapakPerempuan'),
                Tables\Columns\TextColumn::make('namaIbuPerempuan'),
                Tables\Columns\TextColumn::make('namaIbuPria'),
                Tables\Columns\TextColumn::make('namaBapakPria'),
                Tables\Columns\TextColumn::make('alamat1'),
                Tables\Columns\TextColumn::make('alamat2'),
                Tables\Columns\TextColumn::make('anakKeBerapaPria'),
                Tables\Columns\TextColumn::make('anakKeBerapaPerempuan'),
                Tables\Columns\TextColumn::make('linkMap1'),
                Tables\Columns\TextColumn::make('linkMap2'),
                Tables\Columns\TextColumn::make('tanggal1')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('tanggal2')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('galery'),
                Tables\Columns\TextColumn::make('map'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => Pages\ManageWedding6s::route('/'),
        ];
    }
}
