<?php

namespace App\Filament\Admin\Resources\Penggunas;

use App\Filament\Admin\Resources\Penggunas\Pages\ListPenggunas;
use BackedEnum;
use App\Models\Pengguna;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Admin\Resources\Penggunas\Pages\ManagePenggunas;
use App\Filament\Admin\Resources\Penggunas\Schemas\PenggunaForm;

class PenggunaResource extends Resource
{
    protected static ?string $model = Pengguna::class;

    protected static string|BackedEnum|null $navigationIcon = 'fas-user-gear';

    public static function getNavigationLabel(): string
    {
        return 'Kelola Pengguna';
    }

    public static function form(Schema $schema): Schema
    {
        return PenggunaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PenggunaForm::table($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManagePenggunas::route('/'),
        ];
    }
}
