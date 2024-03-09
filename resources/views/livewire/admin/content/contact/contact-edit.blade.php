<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Päivitä Yhteystiedot sivun sisältö') }}
        </h2>
    </header>
    <livewire:admin.content.contact.store.store-titles />
<form wire:submit.prevent="submit" id="form" class="grid grid-cols-1 mt-6 space-y-6 gap-x-6">
    <div class="flex items-center gap-4">
        <x-primary2-button wire:click="submit">{{ __('Tallenna') }}</x-primary2-button>
        <div x-data="{ open: false }">
            <x-secondary-button id="cancel" @click="open = ! open">Peruuta</x-secondary-danger-button>
            <!-- Semi-transparent background with z-10 -->
            <div x-show="open" x-cloak class="fixed inset-0 z-10 bg-gray-500 opacity-75"></div>
            <!-- Modal content with z-20 -->
            <div x-show="open" x-cloak class="fixed inset-0 z-20 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="flex items-center justify-center min-h-[80vh]">
                    <div @click.outside="open = false" class="bg-[#FFF] p-6 rounded shadow-lg max-w-lg mx-auto mt-8 sm:mt-0">
                        <h2 class="mb-2 text-xl font-bold">Haluatko varmasti peruuttaa muutokset?</h2>
                        <x-secondary-danger-button wire:click="cancel" @click="open = false;">Kyllä</x-secondary-danger-button>
                        <x-secondary-button @click="open = false">Ei</x-secondary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</section>














