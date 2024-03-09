<div>
    <div>
        <x-input-label for="title" :value="__('Myymälät osion otsikko')" class="mt-1 block w-full" />
        <x-text-input wire:model="title" id="title" name="title" type="text" class="mt-1 block w-full" required />
        <x-input-error class="mt-2" :messages="$errors->get('title')" />
    </div>
    <div>
        <x-input-label for="subtitle" :value="__('Myymälät osion otsikon alateksti')" class="mt-1 block w-full" />
        <x-text-input wire:model="subtitle" id="subtitle" name="subtitle" type="text" class="mt-1 block w-full" required />
        <x-input-error class="mt-2" :messages="$errors->get('subtitle')" />
    </div>
</div>
