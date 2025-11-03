<?php

namespace App\Filament\Admin\Resources\Penggunas\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Admin\Resources\Penggunas\PenggunaResource;
use Filament\Actions\Action;

class CreatePengguna extends CreateRecord
{
    protected static string $resource = PenggunaResource::class;


}
