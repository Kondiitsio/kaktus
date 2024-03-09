<div x-data @reset-messages.window="setTimeout(() => @this.call('resetMessages'), 2000)">
    @if ($saved)
        <div id="savedMessage" class="bg-[#B2D430] text-center text-white rounded-md py-0.4">
            <p>{{ __('Tallennettu') }}</p>
        </div>
    @endif
    @if ($cancelled)
    <div id="cancelledMessage" class="bg-[#1A8B9D] text-center text-white rounded-md py-0.4">
        {{ __('Muutokset peruutettu') }}
    </div>
    @endif
    @if ($deleted)
    <div id="deletedMessage" class="bg-red-600 text-center text-white rounded-md py-0.4">
        {{ __('Poistettu') }}
    </div>
    @endif
</div>

