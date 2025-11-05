<?php

namespace App\Filament\Admin\Resources\Penggunas\Pages;

use App\Filament\Admin\Resources\Penggunas\PenggunaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPenggunas extends ListRecords
{
    protected static string $resource = PenggunaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
