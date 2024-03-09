<section>
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Päivitä Etusivun sisältö') }}
    </h2>
    {{-- <livewire:admin.content.frontPage.hero.hero-edit /> --}}
    <div class="grid grid-cols-[70%_30%]">
        <livewire:admin.content.frontPage.hero.hero-titles />
        <div class="pl-3">
            <div class="text-center relative flex items-center justify-center h-[8.7rem]">

            <livewire:admin.content.frontPage.hero.hero-image />
                <div class="absolute">
                    <livewire:admin.media.media-library :category="'content'" />
                </div>
            </div>
        </div>
    </div>
<form wire:submit.prevent="submit" id="form" class="grid grid-cols-1 mt-6 space-y-6 gap-x-6">

<div class="flex items-center gap-4">

    <x-primary2-button wire:click="submit">{{ __('Tallenna') }}</x-primary-button>

    <div x-data="{ open: false }" x-cloak>
        <x-secondary-danger-button id="cancel" @click="open = ! open">Peruuta</x-secondary-danger-button>
        <!-- Semi-transparent background with z-10 -->
        <div x-show="open" class="fixed inset-0 z-10 bg-gray-800 opacity-50"></div>
        <!-- Modal content with z-20 -->
        <div x-show="open" class="fixed inset-0 z-20 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-center justify-center min-h-[80vh]">
                <div @click.outside="open = false" class="bg-[#FFF] p-6 rounded shadow-lg">
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

