<section>
<header>
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Päivitä Etusivun sisältö') }}
    </h2>
</header>

<form wire:submit.prevent="submit" id="form" class="mt-6 space-y-6 grid grid-cols-1 gap-x-6">
<div>
    <x-input-label for="title" :value="__('Otsikko')" class="mt-1 block w-full" autofocus autocomplete="title" />
    <x-text-input wire:model="title" id="title" name="title" type="text" class="mt-1 block w-full" required autofocus autocomplete="title"
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
    <x-input-error class="mt-2" :messages="$errors->get('title')" />
</div>
<div>
    <x-input-label for="subtitle" :value="__('Otsikon alateksti')" class="mt-1 block w-full" autofocus autocomplete="subtitle" />
    <x-text-input wire:model="subtitle" id="subtitle" name="subtitle" type="text" class="mt-1 block w-full" required autofocus autocomplete="subtitle"
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
    <x-input-error class="mt-2" :messages="$errors->get('subtitle')" />
</div>
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
</section>

