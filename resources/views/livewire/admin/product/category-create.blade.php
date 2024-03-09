<form novalidate wire:submit.prevent="create">
    <div class="grid sm:grid-cols-2 gap-x-1">
    <div>
    <x-input-label for="category.name" :value="__('Kategoria')" class="block w-full mt-2" />
    <x-text-input wire:model="category.name" id="category.name" name="category.name" class="block w-full mt-1"
                required
                type="text"
                maxlength="20"
    />
    <x-input-error class="mt-2" :messages="$errors->get('category.name')" />
    </div>
    <div>
    <x-primary2-button wire:click.prevent="create" class="sm:mt-[2.2rem] mt-2">Lisää</x-primary2-button>
    </div>
    </div>
</form>

