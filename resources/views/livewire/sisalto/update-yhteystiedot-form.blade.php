<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Päivitä Yhteystiedot sivun sisältö') }}
        </h2>
    </header>

<form wire:submit.prevent="submit" id="form" class="mt-6 space-y-6 grid grid-cols-1 gap-x-6">
    <div>
        <x-input-label for="stores_title" :value="__('Myymälät osion otsikko')" class="mt-1 block w-full" autofocus autocomplete="stores_title" />
        <x-text-input wire:model="stores_title" id="stores_title" name="stores_title" type="text" class="mt-1 block w-full" required autofocus autocomplete="stores_title"
            x-data="{}"
            x-init="() => {
                $refs.input.oninvalid = function(event) {
                    event.target.setCustomValidity('Laitahan otsikko');
                }
                $refs.input.oninput = function(event) {
                    if(event.target.value == '') {
                        event.target.setCustomValidity('Laitahan otsikko');
                    } else {
                        event.target.setCustomValidity('');
                    }
                }
            }"
            x-ref="input"
        />
        <x-input-error class="mt-2" :messages="$errors->get('stores_title')" />
    </div>
    <div>
        <x-input-label for="stores_subtitle" :value="__('Myymälät osion otsikon alateksti')" class="mt-1 block w-full" autofocus autocomplete="stores_subtitle" />
        <x-text-input wire:model="stores_subtitle" id="stores_subtitle" name="stores_subtitle" type="text" class="mt-1 block w-full" required autofocus autocomplete="stores_subtitle"
            x-data="{}"
            x-init="() => {
                $refs.input.oninvalid = function(event) {
                    event.target.setCustomValidity('Laitahan otsikon alateksti');
                }
                $refs.input.oninput = function(event) {
                    if(event.target.value == '') {
                        event.target.setCustomValidity('Laitahan otsikon alateksti');
                    } else {
                        event.target.setCustomValidity('');
                    }
                }
            }"
            x-ref="input"
        />
        <x-input-error class="mt-2" :messages="$errors->get('stores_subtitle')" />
    </div>
<!-- Contact information/Store Address blocks -->






    {{-- @foreach ($stores as $index => $store)
    <div x-data="{ open: false }">
        <h3 class="cursor-pointer flex items-center" @click="open = !open">
        <svg x-show="!open" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
        <svg x-show="open" class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
        </svg>
            {{ $store['name'] }}
        </h3>
        <div x-show="open">
            <div class="grid sm:grid-cols-2 gap-x-1">
            <div>
        <x-input-label for="city_{{ $index }}" :value="__('Kaupunki')" class="mt-2 block w-full" autofocus autocomplete="city" />
        <x-text-input wire:model="stores.{{ $index }}.city" id="city_{{ $index }}" name="city_{{ $index }}" type="text" class="mt-1 block w-full" required autofocus autocomplete="city" />
            </div>
            <div>
        <x-input-label for="street_address_{{ $index }}" :value="__('Katuosoite')" class="mt-2 block w-full" autofocus autocomplete="street_address" />
        <x-text-input wire:model="stores.{{ $index }}.street_address" id="street_address_{{ $index }}" name="street_address_{{ $index }}" type="text" class="mt-1 block w-full" required autofocus autocomplete="street_address" />
            </div>
            <div>
        <x-input-label for="zip_code_{{ $index }}" :value="__('Postinumero')" class="mt-2 block w-full" autofocus autocomplete="zip_code" />
        <x-text-input wire:model="stores.{{ $index }}.zip_code" id="zip_code_{{ $index }}" name="zip_code_{{ $index }}" type="text" class="mt-1 block w-full" required autofocus autocomplete="zip_code" />
            </div>
            <div>
        <x-input-label for="email_{{ $index }}" :value="__('Sähköposti')" class="mt-2 block w-full" autofocus autocomplete="email" />
        <x-text-input wire:model="stores.{{ $index }}.email" id="email_{{ $index }}" name="email_{{ $index }}" type="text" class="mt-1 block w-full" required autofocus autocomplete="email" />
            </div>
            <div>
        <x-input-label for="phone_{{ $index }}" :value="__('Puhelinnumero')" class="mt-2 block w-full" autofocus autocomplete="phone" />
        <x-text-input wire:model="stores.{{ $index }}.phone" id="phone_{{ $index }}" name="phone_{{ $index }}" type="text" class="mt-1 block w-full" required autofocus autocomplete="phone" />
            </div>
            <div>
        <x-input-label for="open_hours_{{ $index }}" :value="__('Aukioloajat')" class="mt-2 block w-full" autofocus autocomplete="open_hours" />
        <x-text-input wire:model="stores.{{ $index }}.open_hours" id="open_hours_{{ $index }}" name="open_hours_{{ $index }}" type="text" class="mt-1 block w-full" required autofocus autocomplete="open_hours" />
            </div>
            </div>
        </div>
    </div>
    @endforeach --}}


    <div class="flex items-center gap-4">
        <x-primary-button wire:click="submit">{{ __('Tallenna') }}</x-primary-button>


        <div x-data="{ open: false }">
            <x-secondary-danger-button id="cancel" @click="open = ! open">Peruuta</x-secondary-danger-button>
            <!-- Semi-transparent background with z-10 -->
            <div x-show="open" class="fixed inset-0 bg-gray-800 opacity-50 z-10"></div>
            <!-- Modal content with z-20 -->
            <div x-show="open" class="fixed z-20 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="flex items-center justify-center min-h-[80vh]">
                    <div @click.outside="open = false" class="bg-[#FFF5F5] p-6 rounded shadow-lg">
                        <h2 class="text-xl font-bold mb-2">Haluatko varmasti peruuttaa muutokset?</h2>
                        <x-secondary-danger-button wire:click="confirmActionCancel" @click="open = false; $dispatch('cancelled')">Kyllä</x-secondary-danger-button>
                        <x-secondary-button @click="open = false">Ei</x-secondary-button>
                    </div>
                </div>
            </div>
        </div>

        <x-action-message class="me-3" on="cancelled">
            {{ __('Muutokset peruttu') }}
        </x-action-message>

        <x-action-message class="me-3" on="saved">
            {{ __('Tallennettu') }}
        </x-action-message>
    </div>

</form>



<div class="mt-6">
    <div class="mt-8 flow-root">
      <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
          <table class="min-w-full divide-y divide-gray-300">
            <thead>
              <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Myymälän Nimi</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                  <span class="sr-only">Muokkaa</span>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            @foreach ($stores as $store)
              <tr>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $store['name'] }}</td>
                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Muokkaa<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>
            @endforeach
              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


<div x-data="{ open: false }">
    <x-secondary-button class="mt-3" @click="open = true">{{ __('Lisää myymälä') }}</x-secondary-button>

    <div class="fixed z-10 inset-0 overflow-y-auto" x-show="open" x-cloak>
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="open = false">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <form wire:submit.prevent="createStore">
                        <x-input-label for="newStore.name" :value="__('Myymälän nimi')" class="mt-2 block w-full" autofocus autocomplete="name" />
                        <x-text-input type="text" wire:model="newStore.name" />
                        <div class="grid sm:grid-cols-2 gap-x-1">
                        <div>
                        <x-input-label for="newStore.city" :value="__('Kaupunki')" class="mt-2 block w-full" autofocus autocomplete="city" />
                        <x-text-input wire:model="newStore.city" id="newStore.city" name="newStore.city" type="text" class="mt-1 block w-full" required autofocus autocomplete="city" />
                        </div>
                        <div>
                        <x-input-label for="newStore.street_address" :value="__('Katuosoite')" class="mt-2 block w-full" autofocus autocomplete="street_address" />
                        <x-text-input wire:model="newStore.street_address" id="newStore.street_address" name="newStore.street_address" type="text" class="mt-1 block w-full" required autofocus autocomplete="street_address" />
                        </div>
                        <div>
                        <x-input-label for="newStore.zip_code" :value="__('Postinumero')" class="mt-2 block w-full" autofocus autocomplete="zip_code" />
                        <x-text-input wire:model="newStore.zip_code" id="newStore.zip_code" name="newStore.zip_code" type="text" class="mt-1 block w-full" required autofocus autocomplete="zip_code" />
                        </div>
                        <div>
                        <x-input-label for="newStore.email" :value="__('Sähköposti')" class="mt-2 block w-full" autofocus autocomplete="email" />
                        <x-text-input wire:model="newStore.email" id="newStore.email" name="newStore.email" type="text" class="mt-1 block w-full" required autofocus autocomplete="email" />
                        </div>
                        <div>
                        <x-input-label for="newStore.phone" :value="__('Puhelinnumero')" class="mt-2 block w-full" autofocus autocomplete="phone" />
                        <x-text-input wire:model="newStore.phone" id="newStore.phone" name="newStore.phone" type="text" class="mt-1 block w-full" required autofocus autocomplete="phone" />
                        </div>
                        <div>
                        <x-input-label for="newStore.open_hours" :value="__('Aukioloajat')" class="mt-2 block w-full" autofocus autocomplete="open_hours" />
                        <x-text-input wire:model="newStore.open_hours" id="newStore.open_hours" name="newStore.open_hours" type="text" class="mt-1 block w-full" required autofocus autocomplete="open_hours" />
                        </div>
                        </div>

                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse gap-2">
                            <x-primary-button class="mt-3" type="submit" @click="open = false">Tallenna</x-primary-button>
                            <x-secondary-button class="mt-3 ml-2" @click="open = false">Peruuta</x-secondary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




</section>












