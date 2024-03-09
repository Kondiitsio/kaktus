<div x-data="{ open: false }">
    <x-secondary-button class="mt-3" @click="open = true">{{ __('Valitse kuva') }}</x-secondary-button>
    <div class="fixed inset-0 z-10 overflow-y-auto" x-show="open" x-cloak>
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="open = false">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-5xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="p-10 bg-white">
                    <!-- Close button -->
                    <div class="absolute top-0 right-0 pt-4 pr-4">
                        <button type="button" @click="open = false" class="text-gray-400 hover:text-gray-500">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                        @foreach ($mediaItems as $mediaItem)
                            <li wire:key="media-item-{{$mediaItem->id}}" class="relative">
                                <div class="block w-full overflow-hidden bg-gray-100 rounded-lg group aspect-h-7 aspect-w-10 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                                    <img src="{{ asset('storage/' . $mediaItem->file_name) }}" alt="Media"  class="object-cover pointer-events-none group-hover:opacity-75">
                                    <button type="button" wire:click.prevent="selectImage({{ $mediaItem->id }})" @click.prevent="open = false" class="absolute inset-0 focus:outline-none">
                                        <span class="sr-only">Valitse</span>
                                    </button>
                                </div>

                            </li>
                        @endforeach
                    </ul>
                    <div class="gap-2 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <livewire:admin.media.media-upload :category="$category" />
                        <livewire:admin.media.media-message />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
