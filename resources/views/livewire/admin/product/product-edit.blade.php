<div x-data="{ open: false }">
    <x-secondary-button class="mt-3" @click="open = true">{{ __('Muokkaa') }}</x-secondary-button>
    <div class="fixed inset-0 z-10 overflow-y-auto" x-show="open" x-cloak>
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="open = false">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <!-- Close button -->
                    <div class="absolute top-0 right-0 pt-4 pr-4">
                        <button type="button" @click="open = false" class="text-gray-400 hover:text-gray-500">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- ... -->

                    <form novalidate wire:submit.prevent="update">
                        <div class="grid sm:grid-cols-2 gap-x-1">
                        <div>
                        <x-input-label for="product.name" :value="__('Tuotteen nimi')" class="block w-full mt-2" />
                        <x-text-input wire:model="product.name" id="product.name" name="product.name" class="block w-full mt-1"
                                    required
                                    type="text"
                                    maxlength="50"
                        />
                        <x-input-error class="mt-2" :messages="$errors->get('product.name')" />

                        </div>
                        <div>
                        <x-input-label for="product.price" :value="__('Hinta')" class="block w-full mt-2" />
                        <x-text-input wire:model="product.price" id="product.price" name="product.price" class="block w-full mt-1"
                                    required
                                    type="text"
                                    maxlength="50"
                        />
                        <x-input-error class="mt-2" :messages="$errors->get('product.price')" />
                        </div>
                        </div>
                        <div class="grid sm:grid-cols-1 gap-x-1">
                        <div>
                        <x-input-label for="product.category" :value="__('Kategoriat')" class="block w-full mt-2" />

                        <div>
                            @foreach($categories as $category)
                                <span class="mr-2">
                                    <input type="checkbox" value="{{ $category->id }}" wire:model="selectedCategories" class="border-gray-300 rounded">
                                    <label class="text-sm text-gray-700">{{ $category->name }}</label>
                                </span>
                            @endforeach
                        </div>

                        <x-input-error class="mt-2" :messages="$errors->get('product.category')" />
                        </div>

                        <div>
                        <x-input-label for="product.description" :value="__('Tuete kuvaus')" class="block w-full mt-2" />
                        <textarea wire:model="product.description" id="product.description" name="product.description" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
                                    required
                                    type="text"
                                    rows="4"

                        ></textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('product.description')" />
                        </div>
                        <div>

                        <div class="flex">

                            <livewire:admin.product.product-edit-media-picker :productId="$product['id']" :mediaId="$product['media_id']" wire:key="product-edit-media-picker-{{ $product['id'] }}" />
                            <livewire:admin.product.product-edit-media-preview :productId="$product['id']" :mediaId="$product['media_id']" wire:key="product-edit-media-preview-{{ $product['id'] }}" />
                        </div>
                        <x-input-error class="mt-2" :messages="$errors->get('product.media')" />
                        </div>
                        </div>
                        <div class="gap-2 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <x-primary2-button wire:click.prevent="update" class="mt-3">Tallenna</x-primary2-button>
                            <livewire:admin.content.modal-message />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
