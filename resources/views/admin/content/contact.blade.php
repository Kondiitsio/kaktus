<x-app-layout>
    <x-slot name="header">
    <div class="grid grid-cols-[40%_60%]">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Yhteystiedot') }}
            </h2>
        </div>
        <div wire:key="message-component">
            <livewire:admin.content.message />
        </div>
    </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#FFF] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 sm:grid-cols-[20%_50%_30%] p-6 text-gray-900">
                    <livewire:admin.content.navigation />
                    <livewire:admin.content.contact.contact-edit />
                    <section class="pl-3">
                        <livewire:admin.content.contact.store.store-create />
                        <livewire:admin.content.contact.store.store-list />
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
