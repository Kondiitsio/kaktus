<div class="flex">
    <div class="mr-4">
        @error('media')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div x-data="{ file: null }">
        <input type="file" wire:model="media" x-ref="file" style="display: none;">
        <x-primary2-button x-on:click="$refs.file.click()">Lataaa kuva</x-primary2-button>
    </div>
</div>
