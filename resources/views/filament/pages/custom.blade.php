<div class="flex items-center justify-between">
    <div class="flex items-center gap-2">
        <x-heroicon-o-users class="w-6 h-6 text-blue-500" />
        <h1 class="text-xl font-bold text-gray-800">Kelola Pengguna</h1>
    </div>

    {{ $this->table }}

    {{--  <x-filament::button color="danger" wire:click="bulkDelete">
        Hapus Terpilih
    </x-filament::button>  --}}
</div>
