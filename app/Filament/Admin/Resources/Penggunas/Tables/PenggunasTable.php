<?php

namespace App\Filament\Admin\Resources\Penggunas\Tables;

use Filament\Tables\Table;
use Filament\Actions\BulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Collection;

class PenggunasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama')->searchable()->sortable(),
                TextColumn::make('nis_nisn')->label('NIS/NISN')->searchable()->sortable(),
                TextColumn::make('kelas')->label('Kelas')->searchable()->sortable(),
                TextColumn::make('konsentrasi_keahlian')->label('Konsentrasi Keahlian')->searchable()->sortable(),
                TextColumn::make('jenis_kelamin')->label('Jenis Kelamin')->searchable()->sortable(),
                TextColumn::make('status')->label('Status')->searchable()->sortable(),
                TextColumn::make('role')->label('Role')->searchable()->sortable(),
            ])  
            ->striped()
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make('aksi'),
            ])
            ->bulkActions([
                BulkAction::make('hapus')
                    ->label('Hapus Data')
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->action(function (Collection $records) {
                        $records->each->delete();
                        Notification::make()
                            ->title('Data berhasil dihapus')
                            ->success()
                            ->send();
                    }),
            ]);
    }
}