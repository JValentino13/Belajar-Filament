<?php

namespace App\Filament\Admin\Resources\Penggunas\Schemas;

use PhpOption\None;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use PhpParser\Node\Stmt\Label;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\Radio;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\Select;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;

class PenggunaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ViewField::make('tambah')
                    ->view('filament.pages.tambah'),
            ]);
            }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Pengguna')
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('nis_nisn')
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
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}
