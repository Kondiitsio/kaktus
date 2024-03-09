<div>
    <div class="sm:hidden">
      <label for="tabs" class="sr-only">Select a tab</label>
      <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
    <select id="tabs" name="tabs" wire:change="selectTab($event.target.value)" class="block w-full py-2 pl-3 pr-10 text-base border-gray-300 rounded-md focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
        <option value="content">Sisältö</option>
        <option value="product">Tuotteet</option>
    </select>
    </div>
    <div class="hidden sm:block">
        <div class="border-b border-gray-200">
            <nav class="flex -mb-px space-x-8" aria-label="Tabs">
                <a href="#" wire:click.prevent="selectTab('content')"
                    class="px-1 py-4 text-sm font-medium whitespace-nowrap {{ $selectedTab == 'content' ? 'text-indigo-600 border-b-2 border-indigo-500' : 'text-gray-500 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-700' }}"
                    aria-current="page">Sisältö</a>
                <a href="#" wire:click.prevent="selectTab('product')"
                    class="px-1 py-4 text-sm font-medium whitespace-nowrap {{ $selectedTab == 'product' ? 'text-indigo-600 border-b-2 border-indigo-500' : 'text-gray-500 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-700' }}">Tuotteet</a>
            </nav>
        </div>
    </div>
    <div class="mt-4">
        @if ($selectedTab == 'content')
            <livewire:admin.media.media-library-content />
        @else
            <livewire:admin.media.media-library-product />
        @endif
    </div>
</div>
