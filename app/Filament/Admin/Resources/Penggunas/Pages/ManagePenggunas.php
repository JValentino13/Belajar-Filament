<?php

namespace App\Filament\Admin\Resources\Penggunas\Pages;

use App\Filament\Admin\Resources\Penggunas\PenggunaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\HtmlString;

class ManagePenggunas extends ManageRecords
{
    protected static string $resource = PenggunaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->createAnother(false)
                ->label('+ Tambah')
                ->modalHeading('')
                ->modalWidth('lg')
                ,
        ];
    }

}