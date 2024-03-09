<section>
    <div>
        <div>
            <x-input-label for="title" :value="__('Otsikko')" class="mt-1 block w-full" autocomplete="title" />
            <x-text-input wire:model="title" id="title" name="title" type="text" class="mt-1 block w-full" required autocomplete="title"
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
            <x-input-label for="subtitle" :value="__('Otsikon alateksti')" class="mt-1 block w-full" autocomplete="subtitle" />
            <x-text-input wire:model="subtitle" id="subtitle" name="subtitle" type="text" class="mt-1 block w-full" required autocomplete="subtitle"
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
    </div>
</section>
