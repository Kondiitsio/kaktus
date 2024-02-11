<x-layout>

<section>
    <div class="bg-[#000] px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-4xl font-bold tracking-tight text-[#B2D430] sm:text-6xl">{{ $etusivu->title }}</h2>
          <p class="mt-6 text-lg leading-8 text-[#FFF5F5]">{{ $etusivu->subtitle }}</p>
        </div>
      </div>
</section>

<section class="container py-20 mx-auto bg-[#FFF5F5] rounded-md mb-20">
    <h2 class="text-center mb-8 text-4xl text-[#1A8B9D] font-bold">Uutisia</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-7">
        <div class="p-6">
            <img src="/img/news/news.jpg" alt="" class="mb-4 rounded-md">
            <h2 class="text-2xl font-bold mb-2 text-[#B2D430]">Otsikko</h2>
            <p class="text-gray-700">Hyvää uutta vuotta! Uuden vuoden kunniaksi myymälöissämme upeita tarjouksia.</p>
            <p class="text-sm text-gray-500">2.1.2016</p>
        </div>
        <div class="p-6">
            <img src="/img/news/greenImg.jpg" alt="" class="mb-4 rounded-md">
            <h2 class="text-2xl font-bold mb-2 text-[#B2D430]">Otsikko</h2>
            <p class="text-gray-700">Joulukukat edullisesti meiltä. Myymälöissämme myös kattava ja edullinen valikoima joulukuusia.</p>
            <p class="text-sm text-gray-500">22.1.2016</p>
        </div>
        <div class="p-6">
            <img src="/img/news/news.jpg" alt="" class="mb-4 rounded-md">
            <h2 class="text-2xl font-bold mb-2 text-[#B2D430]">Otsikko</h2>
            <p class="text-gray-700">Nyt on hyvä aika aloittaa puutarhan valmistelu talven lepokautta varten. Meiltä löydät kaikki työkalut ja tarvikkeet.</p>
            <p class="text-sm text-gray-500">12.3.2016</p>
        </div>
    </div>
</section>

</x-layout>



{{-- <section class="container py-20 mx-auto">
    <div class="grid grid-cols-3 gap-4">
        @foreach($news as $item)
            <div class="bg-[#FFF5F5] shadow-md rounded-md p-6">
                <img src="{{ $item->image }}" alt="{{ $item->title }}" class="mb-4">
                <h2 class="text-2xl font-bold mb-2">{{ $item->title }}</h2>
                <p class="text-gray-700">{{ $item->excerpt }}</p>
                <p class="text-sm text-gray-500">{{ $item->date->format('F j, Y') }}</p>
                <a href="/news/{{ $item->id }}" class="text-blue-500 hover:underline mt-2 inline-block">Read More</a>
            </div>
        @endforeach
    </div>
</section> --}}
