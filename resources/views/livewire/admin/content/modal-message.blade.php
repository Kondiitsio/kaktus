<div class="relative w-full mt-1 text-center text-white"
    x-data @reset-messages.window="setTimeout(() => @this.call('resetMessages'), 3000)"
>
    @if ($saved)
        <div id="savedMessage" class="bg-[#B2D430] rounded-md absolute inset-0 flex items-center justify-center">
            {{ __('Tallennettu') }}
        </div>
    @endif
    @if ($error)
        <div id="errorMessage" class="absolute inset-0 flex items-center justify-center bg-red-500 rounded-md">
            {{ __('Tiedosto koko saa olla maksimissa 1mb suuruinen') }}
        </div>
    @endif
</div>




