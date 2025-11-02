<?php

namespace App\Filament\Admin\Resources\Penggunas\Schemas;

use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use PhpOption\None;
use PhpParser\Node\Stmt\Label;

class PenggunaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')->label('Nama')->required()->maxLength(255),
                TextInput::make('nis_nisn')->label('NIS/NISN')->required()->maxLength(20),
                Select::make('role')->label('Role')->required()
                ->options([
                    'admin' => 'Admin',
                    'kepsek' => 'Kepala Sekolah',
                    'wakakur' => 'Wakil Kepala Sekolah Kurikulum',
                    'wakasis' => 'Wakil Kepala Sekolah Kesiswaan',
                    'wakahum' => 'Wakil Kepala Sekolah Humas',
                    'wakasapra' => 'Wakil Kepala Sekolah Sarana dan Prasarana',
                    'kkk' => 'Kepala Kompetensi Keahlian',
                    'mentor' => 'Mentor/Pembimbing',
                    'siswa' => 'Siswa'
                    ])->native(false)->placeholder(''),
                Select::make('kelas')->label('Kelas')->required()
                ->options([
                    '10' => '10',
                    '11' => '11',
                    '12' => '12',
                ])->native(false)->placeholder(' '),
                Select::make('konsentrasi_keahlian')->label('Konsentrasi Keahlian')->required()
                ->options([
                    'RPL' => 'RPL',
                    'DKV' => 'DKV',
                    'TKP' => 'TKP',
                    'TP' => 'TP',
                    'Kuliner' => 'Kuliner',
                ])->native(false)->placeholder(''),
                Radio::make('jenis_kelamin')->label('Jenis Kelamin')->required()
                ->options([
                    'L' => 'Laki-laki',
                    'P' => 'Perempuan'
                    ])->inline(),
                Radio::make('status')->label('Status')->required()
                ->options([
                    'aktif' => 'Aktif',
                    'non-aktif' => 'Non-Aktif'
                    ])->inline(),
                ]);
            }
        }
