<?php

namespace App\Filament\Admin\Resources\Penggunas\Schemas;

use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;

class PenggunaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // ViewField::make('tambah')
                //     ->view('filament.pages.tambah'),
                TextInput::make('nama')
                    ->required(),
                TextInput::make('nis_nisn')
                    ->numeric()
                    ->required(),
                Select::make('role')
                    ->options([
                        'admin' => 'Admin',
                        'kepsek' => 'Kepala Sekolah',
                        'wakakur' => 'Wakil Kepala Sekolah Bidang Kurikulum',
                        'wakasis' => 'Wakil Kepala Sekolah Bidang Kesiswaan',
                        'wakahum' => 'Wakil Kepala Sekolah Bidang Humas',
                        'wakasar' => 'Wakil Kepala Sekolah Bidang Sarana dan Prasarana',
                        'kkk' => 'Ketua Konsentrasi Keahlian',
                        'mentor' => 'Mentor / Pembimbing',
                        'siswa' => 'Siswa',
                    ])
                    ->required(),
                Select::make('konsentrasi_keahlian')
                    ->options([
                        'RPL' => 'Rekayasa Perangkat Lunak',
                        'DKV' => 'Desain Komunikasi Visual',
                        'TKP' => 'Teknik Konstruksi dan Perumahan',
                        'TP' => 'Teknik Pengelasan',
                        'Kuliner' => 'Kuliner',
                    ])
                    ->required(),
                Radio::make('jenis_kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->required(),
                Radio::make('status')
                    ->options([
                        'Aktif' => 'Aktif',
                        'Tidak Aktif' => 'Tidak Aktif',
                    ])
                    ->required(),
            ]);
            }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('nis_nisn')
                    ->label('NIS/NISN')
                    ->numeric()
                    ->sortable(),
                // TextColumn::make('kelas')
                //     ->searchable(),
                TextColumn::make('konsentrasi_keahlian')
                    ->searchable(),
                TextColumn::make('jenis_kelamin')
                    ->searchable(),
                TextColumn::make('status')
                    ->searchable(),
                TextColumn::make('role')
                    ->searchable(),
            ])
            ->filters([

            ])
            ->recordActions([
                EditAction::make('aksi')
                    ->icon('feathericon-edit-2')
                    ->modalHeading('')
            ])
            ->recordActionsColumnLabel('Aksi');
    }
}
