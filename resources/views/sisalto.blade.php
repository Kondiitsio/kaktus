<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sisältö') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#FFF5F5] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 sm:grid-cols-[20%_80%] p-6 text-gray-900">
                    <livewire:sisalto.side-navigation />
                    <livewire:update-etusivu-form />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
