<?php

namespace App\Filament\Resources;

use DateTime;
use Filament\Forms;
use Filament\Tables;
use App\Models\Wedding10;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Livewire\TemporaryUploadedFile;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\Wedding10Resource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Wedding10Resource\RelationManagers;
use App\Filament\Resources\Wedding10Resource\Pages\ManageWedding10s;

class Wedding10Resource extends Resource
{
    protected static ?string $model = Wedding10::class;


    protected static ?string $navigationIcon = 'heroicon-s-mail-open';
    protected static ?string $navigationGroup = 'Undangan Pernikahan';
    protected static ?int $navigationSort = 10;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make()->schema([
                    Step::make('Url')->schema([
                        TextInput::make('slug')->required()->maxLength(255)->label('Custom url')
                            ->prefix('http://127.0.0.1:8000/wedding10/'),
                    ])->icon('heroicon-s-link'),

                    Step::make('Pengantin laki-laki')->schema([
                        TextInput::make('namaPriaLengkap')
                            ->required()
                            ->maxLength(255)->label('Nama Lengkap'),
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
                        TextInput::make('linkIgPria')
                            ->required()
                            ->maxLength(255)->label('Link Instagram'),
                        TextInput::make('linkTwPria')
                            ->required()
                            ->maxLength(255)->label('Link Twiter'),
                        FileUpload::make('fotoPria')
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                return (string) str($file->getClientOriginalName())->prepend('wedding10/');
                            })->image()->deleteUploadedFileUsing(function ($file) {
                                Storage::disk('public')->delete($file);
                            })->required()->label('Foto Pria'),
                    ])->columns(2)->icon('heroicon-s-user'),
                    Step::make('Pengantin wanita')->schema([
                        TextInput::make('namaPerempuanLengkap')
                            ->required()
                            ->maxLength(255)->label('Nama Lengkap'),
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
                        TextInput::make('linkIgPerempuan')
                            ->required()
                            ->maxLength(255)->label('Link Instagram'),
                        TextInput::make('linkTwPerempuan')
                            ->required()
                            ->maxLength(255)->label('Link Twiter'),
                        FileUpload::make('fotoPerempuan')
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                return (string) str($file->getClientOriginalName())->prepend('wedding10/');
                            })->image()->deleteUploadedFileUsing(function ($file) {
                                Storage::disk('public')->delete($file);
                            })->required()->label('Foto Perempuan'),
                    ])->columns(2)->icon('heroicon-s-user'),
                    Step::make('Akad Nikah')->schema([
                        TextInput::make('alamat1')
                            ->required()
                            ->maxLength(255)->label('Alamat'),
                        TextInput::make('linkMap1')->maxLength(255)->required()->label('Link Map'),
                        DateTimePicker::make('awalTanggal1')->required()->label('Acara Awal'),
                        DateTimePicker::make('akhirTanggal1')
                            ->required()->label('Sampai'),
                    ])->columns(2)->icon('heroicon-s-calendar'),
                    Step::make('Resepsi')->schema([
                        TextInput::make('alamat2')
                            ->required()
                            ->maxLength(255)->label('Alamat'),
                        TextInput::make('linkMap2')->maxLength(255)->required()->label('Link Map'),
                        DateTimePicker::make('awalTanggal2')->required()->label('Tanggal Acara'),
                    ])->columns(2)->icon('heroicon-s-calendar'),
                    Step::make('Unduh Mantu')->schema([
                        TextInput::make('alamat3')
                            ->required()
                            ->maxLength(255)->label('Alamat'),
                        TextInput::make('linkMap3')->maxLength(255)->required()->label('Link Map'),
                        DateTimePicker::make('awalTanggal3')->required()->label('Tanggal Acara'),
                    ])->columns(2)->icon('heroicon-s-calendar'),
                    Step::make('Our Story')->schema([
                        Placeholder::make('Pertama Kenal'),
                        TextInput::make('lokasi1')->required()->maxLength(255)->label('Lokasi1'),
                        DateTimePicker::make('tanggal1')->required()->label('Tanggal'),
                        TextArea::make('cerita1')->required()->label('Cerita'),

                        Placeholder::make('Menyatakan Cinta'),
                        TextInput::make('lokasi2')->required()->maxLength(255)->label('Lokasi'),
                        DateTimePicker::make('tanggal2')->required()->label('Tanggal'),
                        TextArea::make('cerita2')->required()->label('Cerita'),

                        Placeholder::make('Tunangan'),
                        TextInput::make('lokasi3')->required()->maxLength(255)->label('Lokasi'),
                        DateTimePicker::make('tanggal3')->required()->label('Tanggal'),
                        TextArea::make('cerita3')->required()->label('Cerita'),
                    ])->icon('heroicon-s-calendar'),
                    Step::make('Lain lain')->schema([
                        Placeholder::make('Gift'),
                        TextInput::make('namaRekening')->required()->maxLength(255)->label('Nama Rekening'),
                        TextInput::make('noRekening')->required()->maxLength(255)->label('Nomor Rekening'),
                        TextInput::make('Rumah')->required()->maxLength(255)->label('Rumah'),
                        TextInput::make('alamat4')->required()->maxLength(255)->label('Alamat'),
                        FileUpload::make('qrCode')
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                return (string) str($file->getClientOriginalName())->prepend('wedding10/');
                            })->image()->deleteUploadedFileUsing(function ($file) {
                                Storage::disk('public')->delete($file);
                            })->required()->label('QR Code'),
                        TextArea::make('ourQuote')->required()->label('Our Quote'),
                        FileUpload::make('video')
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                return (string) str($file->getClientOriginalName())->prepend('wedding10/');
                            })->deleteUploadedFileUsing(function ($file) {
                                Storage::disk('public')->delete($file);
                            })->acceptedFileTypes(['video/mp4', 'video/ogg', 'video/webm'])->maxSize(51200)->required()->label('Video'),
                        FileUpload::make('galery')->image()->multiple()->required()->maxFiles(6)->deleteUploadedFileUsing(function ($file) {
                            Storage::disk('public')->delete($file);
                        })->directory('wedding10')->label('Galery'),
                    ])->icon('heroicon-s-clipboard'),
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
                Tables\Columns\TextColumn::make('ourQuote')->wrap(),
                Tables\Columns\ImageColumn::make('fotoPria'),
                Tables\Columns\ImageColumn::make('fotoPerempuan'),
                Tables\Columns\ImageColumn::make('qrCode'),
                Tables\Columns\TextColumn::make('galery')->wrap()->words(1),
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
            'index' => Pages\ManageWedding10s::route('/'),
        ];
    }
}
