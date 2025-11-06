<?php

namespace App\Filament\Admin\Resources\Penggunas\Pages;

use Illuminate\View\View;
use Filament\Actions\CreateAction;
use Filament\View\PanelsRenderHook;
use Filament\Support\Facades\FilamentView;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Admin\Resources\Penggunas\PenggunaResource;

class ManagePenggunas extends ManageRecords
{
    protected static string $resource = PenggunaResource::class;

    protected ?string $heading = '  ';

    public function boot(): void
    {
        FilamentView::registerRenderHook(
            PanelsRenderHook::PAGE_HEADER_ACTIONS_BEFORE,
            fn (): View => view('filament.custom.header-info')
        );

        FilamentView::registerRenderHook(
            PanelsRenderHook::CONTENT_START,
            fn () => view('filament.custom.filter-form')
        );
    }

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}