<nav class="absolute inset-x-0 top-0 z-50" x-data="{ open: false }">
    <div class="mx-auto max-w-7xl">
      <div class="px-6 pt-6 lg:max-w-2xl lg:pl-8 lg:pr-0">
        <nav class="flex items-center justify-between lg:justify-start" aria-label="Global">
          <a href="/" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img alt="Your Company" class="h-8 w-auto" src="/img/logos/Kaktus.svg">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 lg:hidden" @click="open = true">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
          <div class="hidden lg:ml-12 lg:flex lg:gap-x-14">
            <a href="/yhteystiedot" class="{{ request()->is('yhteystiedot') ? 'text-[#1A8B9D]' : 'text-gray-900' }} text-sm font-semibold leading-6 hover:text-[#1A8B9D]">Yhteystiedot</a>
            @auth
                <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'text-[#1A8B9D]' : 'text-gray-900' }} text-sm font-semibold leading-6 hover:text-[#1A8B9D]" wire:navigate>Hallintapaneeli</a>
            @else
                <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'text-[#1A8B9D]' : 'text-gray-900' }} text-sm font-semibold leading-6 hover:text-[#1A8B9D]" wire:navigate>Kirjaudu sisään</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="{{ request()->is('register') ? 'text-[#1A8B9D]' : 'text-gray-900' }} text-sm font-semibold leading-6 hover:text-[#1A8B9D]" wire:navigate>Rekisteröidy</a>
            @endif
            @endauth
          </div>
        </nav>
      </div>
    </div>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" x-show="open" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            {{-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""> --}}
            <?xml version="1.0" ?><svg class="h-8 w-auto" fill="#1A8B9D" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><rect fill="none" height="256" width="256"/><path d="M224,216a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H88V140H84A68.1,68.1,0,0,1,16,72a28,28,0,0,1,56,0A12,12,0,0,0,84,84h4V56a40,40,0,0,1,80,0v68h4a12,12,0,0,0,12-12,28,28,0,0,1,56,0,68.1,68.1,0,0,1-68,68h-4v28h48A8,8,0,0,1,224,216Z"/></svg>
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = false">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-2 py-6">
                <a href="/yhteystiedot" class="{{ request()->is('yhteystiedot') ? 'text-[#1A8B9D] bg-gray-50' : 'text-gray-900' }} -mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-gray-50 hover:text-[#1A8B9D]">Yhteystiedot</a>
              </div>
              <div class="py-6">
                @auth
                <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'text-[#1A8B9D] bg-gray-50' : 'text-gray-900' }} -mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-gray-50 hover:text-[#1A8B9D]" wire:navigate>Hallintapaneeli</a>
                @else
                    <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'text-[#1A8B9D] bg-gray-50' : 'text-gray-900' }} -mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-gray-50 hover:text-[#1A8B9D]" wire:navigate>Kirjaudu sisään</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="{{ request()->is('register') ? 'text-[#1A8B9D] bg-gray-50' : 'text-gray-900' }} -mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-gray-50 hover:text-[#1A8B9D]" wire:navigate>Rekisteröidy</a>
                    @endif
                @endauth
              </div>
            </div>
          </div>
      </div>
    </div>
</nav>




