<?php

namespace App\Filament\Admin\Resources\Penggunas;

use BackedEnum;
use App\Models\Pengguna;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\View\PanelsRenderHook;
use App\Filament\Admin\Resources\Penggunas\Schemas\PenggunaForm;
use App\Filament\Admin\Resources\Penggunas\Pages\ManagePenggunas;
use App\Filament\Admin\Resources\Penggunas\Tables\PenggunasTable;

class PenggunaResource extends Resource
{
    protected static ?string $model = Pengguna::class;

    protected static string|BackedEnum|null $navigationIcon = 'fas-user-gear';

    protected static ?string $recordTitleAttribute = 'Kelola Pengguna';

    protected static ?string $slug= 'Kelola-Pengguna';

    protected static ?string $navigationLabel = 'Kelola Pengguna';

    public static function form(Schema $schema): Schema
    {
        return PenggunaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PenggunasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ManagePenggunas::route('/'),
        ];
    }
}