<x-layout>
<section>
    <div class="bg-white">
        <div class="relative">
          <div class="mx-auto max-w-7xl">
            <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
              <svg class="absolute inset-y-0 hidden h-full transform translate-x-1/2 right-8 w-80 fill-white lg:block" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="0,0 90,0 50,100 0,100" />
              </svg>
              <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                <div class="max-w-2xl mx-auto lg:mx-0 lg:max-w-xl">
                  <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{{ $hero->title }}</h1>
                  <p class="mt-6 text-lg leading-8 text-gray-600">{{ $hero->subtitle }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            @if ($hero->media)
                <img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full" src="{{ asset('storage/' . $hero->media->file_name) }}" alt="">
            @endif
          </div>
        </div>
      </div>
</section>

<section>
<div class="bg-white">
    <div class="max-w-2xl px-4 py-16 mx-auto sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>

      <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        @foreach ($products as $product )
        <a href="#" class="group">
          <div class="w-full overflow-hidden bg-gray-200 rounded-lg aspect-h-1 aspect-w-1 xl:aspect-h-8 xl:aspect-w-7">
            @if($product->media)
            <img src="{{ asset('storage/' . $product->media->file_name) }}" alt="{{ $product->name }}" class="object-cover object-center w-full h-full group-hover:opacity-75">
            @endif
          </div>
          <h3 class="mt-4 text-sm text-gray-700">{{ $product->name }}</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">{{ $product->price }}€</p>
        </a>
        @endforeach
      </div>
    </div>
  </div>
</section>
</x-layout>

