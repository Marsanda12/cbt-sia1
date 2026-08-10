<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                ->columns(2)
                ->columnSpanFull()
                ->schema([
                    //upload foto
                    FileUpload::make('photo_path')
                        ->label('Upload foto profil')
                        ->image() //khusus upload gambar
                        ->avatar() //resize otomatis dan circular
                        ->disk('public') //partisi storage
                        ->directory('user-photos') //nama folder
                        ->maxSize(1024) //ukuran max 1 mb
                        ->imageEditor()
                        ->columnSpanFull()
                        ->alignCenter(),
                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('email')
                    ->label('Alamat email')
                    ->unique('users', 'email')
                    ->prefix('@')
                    ->email(),
                TextInput::make('username')
                    ->label('Login username')
                    //harus uniqe dengan user yang lain
                    ->unique(
                        table: 'users',
                        column: 'username',
                    )
                    ->placeholder('Digunakan untuk login akun')
                    ->helperText('Username harus unik')
                    ->required(),
                TextInput::make('phone')
                    ->label('Nomor telepon')
                    ->prefixIcon(Heroicon::OutlinedPhone)
                    ->tel(),
                //Toggle::make('is_staff')
                   // ->required(),
                TextInput::make('password')
                    ->hiddenOn('edit') // disembunyikan di halaman edit
                    ->revealable() //tampilkan password
                    ->password()
                    ->required(),
                ]),
            ]);
    }
}
