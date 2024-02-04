<nav class="flex flex-1 flex-col" aria-label="Sidebar">
    <ul role="list" class="-mx-2 space-y-1">
      <li>
        <a href="{{ url('/sisalto/etusivu') }}" class="{{ request()->is('sisalto/etusivu') ? 'underline decoration-2 text-[#65B741]' : 'text-gray-700' }}
            group hover:text-[#65B741] hover:underline hover:decoration-2 flex gap-x-3 rounded-md p-2 pl-3 text-sm leading-6 font-semibold"
            wire:navigate>Etusivu
        </a>
      </li>
      <li>
        <a href="{{ url('/sisalto/yhteystiedot') }}" class="{{ request()->is('sisalto/yhteystiedot') ? 'underline decoration-2 text-[#65B741]' : 'text-gray-700' }}
            group hover:text-[#65B741] hover:underline hover:decoration-2 flex gap-x-3 rounded-md p-2 pl-3 text-sm leading-6 font-semibold"
            wire:navigate>Yhteystiedot
        </a>
      </li>
    </ul>
</nav>
