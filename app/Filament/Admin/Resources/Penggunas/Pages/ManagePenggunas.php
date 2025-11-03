<?php

namespace App\Filament\Admin\Resources\Penggunas\Pages;

use App\Filament\Admin\Resources\Penggunas\PenggunaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePenggunas extends ManageRecords
{
    protected static string $resource = PenggunaResource::class;

    public function getTitle(): string
    {
        return 'Kelola Pengguna';
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->createAnother(false)
                ->label('+ Tambah')
                ->modalHeading('')
                ->modalSubheading('Masukkan informasi akun pengguna di bawah ini.')
                ->modalWidth('lg')
                ,
        ];
    }

}
