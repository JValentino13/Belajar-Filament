<?php

namespace App\Filament\Admin\Resources\Penggunas\Pages;

use App\Filament\Admin\Resources\Penggunas\PenggunaResource;
use App\Filament\Admin\Resources\Penggunas\Schemas\PenggunaForm;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Schemas\Schema;

class ListPenggunas extends ListRecords
{
    protected static string $resource = PenggunaResource::class;
}
