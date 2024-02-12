<nav x-data="{ open: false }" class="bg-[#1A8B9D]">
    <div class="container mx-auto">
        <div class="relative flex items-center justify-between h-16">
            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-[#FFF5F5] hover:text-[#FFF5F5] hover:bg-[#B2D430] focus:outline-none focus:bg-[#B2D430] focus:text-[#FFF5F5]">
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
                    <a href="/"><img class="block lg:hidden h-10 w-auto" src="/img/logos/Kaktus.svg" alt="Kaktus logo"></a>
                    <a href="/"><img class="hidden lg:block h-10 w-auto" src="/img/logos/Kaktus.svg" alt="Kaktus logo"></a>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex">
                        <a href="/yhteystiedot" class="{{ request()->is('yhteystiedot') ? 'text-[#FFF5F5] bg-[#B2D430]' : 'text-[#FFF5F5]' }} ml-4 px-3 py-3 rounded-md text-sm font-medium hover:text-[#FFF5F5] hover:bg-[#B2D430] focus:outline-none focus:text-[#FFF5F5] focus:bg-[#B2D430]">Yhteystiedot</a>
                        @auth
                            <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'text-[#FFF5F5] bg-[#B2D430]' : 'text-[#FFF5F5]' }} ml-4 px-3 py-3 rounded-md text-sm font-medium hover:text-[#FFF5F5] hover:bg-[#B2D430] focus:outline-none focus:text-[#FFF5F5] focus:bg-[#B2D430]" wire:navigate>Hallintapaneeli</a>
                        @else
                            <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'text-[#FFF5F5] bg-[#B2D430]' : 'text-[#FFF5F5]' }} ml-4 px-3 py-3 rounded-md text-sm font-medium hover:text-[#FFF5F5] hover:bg-[#B2D430] focus:outline-none focus:text-[#FFF5F5] focus:bg-[#B2D430]" wire:navigate>Kirjaudu sisään</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="{{ request()->is('register') ? 'text-[#FFF5F5] bg-[#B2D430]' : 'text-[#FFF5F5]' }} ml-4 px-3 py-3 rounded-md text-sm font-medium hover:text-[#FFF5F5] hover:bg-[#B2D430] focus:outline-none focus:text-[#FFF5F5] focus:bg-[#B2D430]" wire:navigate>Rekisteröidy</a>
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
        <a href="/yhteystiedot" class="{{ request()->is('yhteystiedot') ? 'text-[#FFF5F5] bg-[#B2D430]' : 'text-[#FFF5F5]' }} block px-3 py-2 rounded-md text-base font-medium hover:text-[#FFF5F5] hover:bg-[#B2D430] focus:outline-none focus:text-[#FFF5F5] focus:bg-[#B2D430]">Yhteystiedot</a>
            @auth
                <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'text-[#FFF5F5] bg-[#B2D430]' : 'text-[#FFF5F5]' }} block px-3 py-2 rounded-md text-base font-medium hover:text-[#FFF5F5] hover:bg-[#B2D430] focus:outline-none focus:text-[#FFF5F5] focus:bg-[#B2D430]" wire:navigate>Hallintapaneeli</a>
            @else
                <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'text-[#FFF5F5] bg-[#B2D430]' : 'text-[#FFF5F5]' }} block px-3 py-2 rounded-md text-base font-medium hover:text-[#FFF5F5] hover:bg-[#B2D430] focus:outline-none focus:text-[#FFF5F5] focus:bg-[#B2D430]" wire:navigate>Kirjaudu sisään</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="{{ request()->is('register') ? 'text-[#FFF5F5] bg-[#B2D430]' : 'text-[#FFF5F5]' }} block px-3 py-2 rounded-md text-base font-medium hover:text-[#FFF5F5] hover:bg-[#B2D430] focus:outline-none focus:text-[#FFF5F5] focus:bg-[#B2D430]" wire:navigate>Rekisteröidy</a>
                @endif
            @endauth
    </div>
</nav>
