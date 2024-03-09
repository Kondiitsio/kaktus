<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-2">
            <div>
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    {{ __('Etusivu') }}
                </h2>
            </div>
            <div>
                <livewire:admin.content.message />
            </div>
        </div>
        </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-[#FFF] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 sm:grid-cols-[20%_80%] p-6 text-gray-900">
                <livewire:admin.content.navigation />
                <livewire:admin.content.frontPage.front-page-edit />
            </div>
        </div>
    </div>
</x-app-layout>
