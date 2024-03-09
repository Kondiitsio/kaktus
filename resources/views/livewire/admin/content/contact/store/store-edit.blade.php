<div x-data="{ open: false }">
    <x-secondary-button class="mt-3" @click="open = true">{{ __('Muokkaa') }}</x-secondary-button>
    <div class="fixed z-10 inset-0 overflow-y-auto" x-show="open" x-cloak>
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="open = false">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <!-- Close button -->
                    <div class="absolute top-0 right-0 pt-4 pr-4">
                        <button type="button" @click="open = false" class="text-gray-400 hover:text-gray-500">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- ... -->

                    <form wire:submit.prevent="update">
                        <div class="grid sm:grid-cols-2 gap-x-1">
                        <div>
                        <x-input-label for="store.name" :value="__('Myymälän nimi')" class="mt-2 block w-full" />
                        <x-text-input wire:model="store.name" id="store.name" name="store.name" class="mt-1 block w-full"
                                    required
                                    type="text"
                                    maxlength="50"
                        />
                        <x-input-error class="mt-2" :messages="$errors->get('store.name')" />

                        </div>
                        <div></div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-x-1">
                        <div>
                        <x-input-label for="store.city" :value="__('Kaupunki')" class="mt-2 block w-full" />
                        <x-text-input wire:model="store.city" id="store.city" name="store.city" class="mt-1 block w-full"
                                    required
                                    type="text"
                                    maxlength="50"
                        />
                        <x-input-error class="mt-2" :messages="$errors->get('store.city')" />
                        </div>
                        <div>
                        <x-input-label for="store.street_address" :value="__('Katuosoite')" class="mt-2 block w-full" />
                        <x-text-input wire:model="store.street_address" id="store.street_address" name="store.street_address" class="mt-1 block w-full"
                                    required
                                    type="text"
                                    maxlength="50"
                        />
                        <x-input-error class="mt-2" :messages="$errors->get('store.street_address')" />
                        </div>
                        <div>
                        <x-input-label for="store.zip_code" :value="__('Postinumero')" class="mt-2 block w-full" />
                        <x-text-input wire:model="store.zip_code" id="store.zip_code" name="store.zip_code" class="mt-1 block w-full"
                                    required
                                    type="text"

                        />
                        <x-input-error class="mt-2" :messages="$errors->get('store.zip_code')" />
                        </div>
                        <div>
                        <x-input-label for="store.email" :value="__('Sähköposti')" class="mt-2 block w-full" />
                        <x-text-input wire:model="store.email" id="store.email" name="store.email" class="mt-1 block w-full"
                                    required
                                    type="email"
                                    maxlength="50"
                        />
                        <x-input-error class="mt-2" :messages="$errors->get('store.email')" />
                        </div>
                        <div>
                        <x-input-label for="store.phone" :value="__('Puhelinnumero')" class="mt-2 block w-full" />
                        <x-text-input wire:model="store.phone" id="store.phone" name="store.phone" class="mt-1 block w-full"
                                    required
                                    type="tel"
                                    maxlength="20"
                                    pattern="/^[\s+]*\d[\d\s+]*$/"
                        />
                        <x-input-error class="mt-2" :messages="$errors->get('store.phone')" />
                        </div>
                        <div>
                        <x-input-label for="store.open_hours" :value="__('Aukioloajat')" class="mt-2 block w-full" />
                        <x-text-input wire:model="store.open_hours" id="store.open_hours" name="store.open_hours" class="mt-1 block w-full"
                                    required
                                    type="text"
                                    maxlength="50"
                        />
                        <x-input-error class="mt-2" :messages="$errors->get('store.open_hours')" />
                        </div>
                        </div>
                        <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-2">
                            <x-primary2-button wire:click.prevent="update" class="mt-3">Tallenna</x-primary2-button>
                            <livewire:admin.content.contact.store.store-delete :store="$store" wire:key="store-delete-{{ $store['id'] }}" />
                            <livewire:admin.content.modal-message />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


