<nav x-data="{ open: false }" class="bg-[#65B741]">
    <div class="container mx-auto">
        <div class="relative flex items-center justify-between h-16">
            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-[#FFB534] focus:outline-none focus:bg-[#FFB534] focus:text-white">
                    <!-- Icon when menu is closed. -->
                    <svg :class="{'hidden': open, 'block': !open }" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <!-- Icon when menu is open. -->
                    <svg :class="{'block': open, 'hidden': !open }" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start text-green-500">
                <div class="flex-shrink-0">
                    <a href="/"><img class="block lg:hidden h-10 w-auto" src="/img/logos/Kaktus(2).svg" alt="Kaktus logo"></a>
                    <a href="/"><img class="hidden lg:block h-10 w-auto" src="/img/logos/Kaktus(2).svg" alt="Kaktus logo"></a>



                    {{-- <h1 class="block lg:hidden h-8 w-auto text-white">Kaktus</h1>
                    <h1 class="hidden lg:block h-8 w-auto text-white">Kaktus</h1> --}}
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex">
                        <a href="/yhteystiedot" class="{{ request()->is('yhteystiedot') ? 'text-white bg-[#FFB534]' : 'text-white' }} ml-4 px-3 py-3 rounded-md text-sm font-medium hover:text-white hover:bg-[#FFB534] focus:outline-none focus:text-white focus:bg-[#FFB534]">Yhteystiedot</a>
                        @auth
                            <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'text-white bg-[#FFB534]' : 'text-white' }} ml-4 px-3 py-3 rounded-md text-sm font-medium hover:text-white hover:bg-[#FFB534] focus:outline-none focus:text-white focus:bg-[#FFB534]" wire:navigate>Hallintapaneeli</a>
                        @else
                            <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'text-white bg-[#FFB534]' : 'text-white' }} ml-4 px-3 py-3 rounded-md text-sm font-medium hover:text-white hover:bg-[#FFB534] focus:outline-none focus:text-white focus:bg-[#FFB534]" wire:navigate>Kirjaudu sisään</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="{{ request()->is('register') ? 'text-white bg-[#FFB534]' : 'text-white' }} ml-4 px-3 py-3 rounded-md text-sm font-medium hover:text-white hover:bg-[#FFB534] focus:outline-none focus:text-white focus:bg-[#FFB534]" wire:navigate>Rekisteröidy</a>
                            @endif
                        @endauth

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" x-show="open">
        <a href="/yhteystiedot" class="{{ request()->is('yhteystiedot') ? 'text-white bg-[#FFB534]' : 'text-white' }} block px-3 py-2 rounded-md text-base font-medium hover:text-white hover:bg-[#FFB534] focus:outline-none focus:text-white focus:bg-[#FFB534]">Yhteystiedot</a>
            @auth
                <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'text-white bg-[#FFB534]' : 'text-white' }} block px-3 py-2 rounded-md text-base font-medium hover:text-white hover:bg-[#FFB534] focus:outline-none focus:text-white focus:bg-[#FFB534]" wire:navigate>Hallintapaneeli</a>
            @else
                <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'text-white bg-[#FFB534]' : 'text-white' }} block px-3 py-2 rounded-md text-base font-medium hover:text-white hover:bg-[#FFB534] focus:outline-none focus:text-white focus:bg-[#FFB534]" wire:navigate>Kirjaudu sisään</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="{{ request()->is('register') ? 'text-white bg-[#FFB534]' : 'text-white' }} block px-3 py-2 rounded-md text-base font-medium hover:text-white hover:bg-[#FFB534] focus:outline-none focus:text-white focus:bg-[#FFB534]" wire:navigate>Rekisteröidy</a>
                @endif
            @endauth
    </div>
</nav>
