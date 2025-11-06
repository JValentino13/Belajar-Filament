<?php

namespace App\Filament\Admin\Resources\Penggunas\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Admin\Resources\Penggunas\PenggunaResource;

class ManagePenggunas extends ManageRecords
{
    protected static string $resource = PenggunaResource::class;

    // protected ?string $heading ='';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
