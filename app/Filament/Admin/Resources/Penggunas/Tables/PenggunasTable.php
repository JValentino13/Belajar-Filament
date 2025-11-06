<?php

namespace App\Filament\Admin\Resources\Penggunas\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;

class PenggunasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->searchable(false)
            ->defaultPaginationPageOption(5)
            ->paginationPageOptions([5])
            ->columns([
                TextColumn::make('nama')->label('Nama')->searchable()->sortable(),
                TextColumn::make('nis_nisn')->label('NIS/NISN')->searchable()->sortable(),
                TextColumn::make('kelas')->label('Kelas')->searchable()->sortable(),
                TextColumn::make('konsentrasi_keahlian')->label('Konsentrasi Keahlian')->searchable()->sortable(),
                TextColumn::make('jenis_kelamin')->label('Jenis Kelamin')->searchable()->sortable(),
                TextColumn::make('status')->label('Status')->searchable()->sortable(),
                TextColumn::make('role')->label('Role')->searchable()->sortable(),
            ])
            ->view('filament.pages.custom')
            ->filters([
                //
            ])
            ->recordActionsColumnLabel('Aksi')
            ->recordActions([
                EditAction::make('aksi')
                    ->icon('feathericon-edit-2'),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->label('Hapus'),
            ]);
    }
}
