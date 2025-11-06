<?php

namespace App\Filament\Admin\Resources\Penggunas\Tables;

use Filament\Actions\ActionGroup;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

class PenggunasTable
{

    public static function configure(Table $table): Table
    {
        return $table
            // ->searchable(false)
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
            ->headerActions([
                
            ])
            ->filters([
                // Filter::make('status'),
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