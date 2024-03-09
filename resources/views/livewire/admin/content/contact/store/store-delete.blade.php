<div x-data="{ deleteOpen: false }">
<div x-data="{ open: false }" id="delete">
    <x-secondary-danger-button id="delete" @click="deleteOpen = true" class="mt-3 ml-2">Poista</x-secondary-danger-button>
</div>

<!-- Delete confirmation modal -->
<div class="fixed inset-0 z-20 overflow-y-auto" x-show="deleteOpen" x-cloak>
    <!-- delete confirmation modal content... -->
    <div class="flex items-center justify-center min-h-[80vh]">
        <div @click.outside="deleteOpen = false" class="bg-[#FFF] p-6 rounded shadow-lg max-w-md mx-auto mt-8 sm:mt-0 overflow-auto">
            <h2 class="mb-2 text-sm font-bold sm:text-md md:text-lg lg:text-xl">Haluatko varmasti poistaa myymälän tiedot?</h2>
            <x-secondary-danger-button wire:click="delete" @click="editOpen = false; deleteOpen = false;">Kyllä</x-secondary-danger-button>
            <x-secondary-button @click="deleteOpen = false">Ei</x-secondary-button>
        </div>
    </div>
</div>
</div>
