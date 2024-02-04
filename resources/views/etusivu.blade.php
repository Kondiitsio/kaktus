<x-layout>
    <section class="container mx-auto text-center py-20">
        <h1 class="text-5xl text-[#65B741] font-bold mb-8">{{ $etusivu->title }}</h1>
        <p class="text-xl text-[#FFB534]">{{ $etusivu->sub_title }}</p>
    </section>
    <section class="container py-20 mx-auto bg-[#FBF6EE] rounded-md mb-20">
        <h2 class="text-center mb-8 text-4xl text-[#65B741] font-bold">Uutisia</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-7">
            <div class="p-6">
                <img src="/img/news/news.jpg" alt="" class="mb-4 rounded-md">
                <h2 class="text-2xl font-bold mb-2 text-[#FFB534]">Otsikko</h2>
                <p class="text-gray-700">Hyvää uutta vuotta! Uuden vuoden kunniaksi myymälöissämme upeita tarjouksia.</p>
                <p class="text-sm text-gray-500">2.1.2016</p>
            </div>
            <div class="p-6">
                <img src="/img/news/greenImg.jpg" alt="" class="mb-4 rounded-md">
                <h2 class="text-2xl font-bold mb-2 text-[#FFB534]">Otsikko</h2>
                <p class="text-gray-700">Joulukukat edullisesti meiltä. Myymälöissämme myös kattava ja edullinen valikoima joulukuusia.</p>
                <p class="text-sm text-gray-500">22.1.2016</p>
            </div>
            <div class="p-6">
                <img src="/img/news/news.jpg" alt="" class="mb-4 rounded-md">
                <h2 class="text-2xl font-bold mb-2 text-[#FFB534]">Otsikko</h2>
                <p class="text-gray-700">Nyt on hyvä aika aloittaa puutarhan valmistelu talven lepokautta varten. Meiltä löydät kaikki työkalut ja tarvikkeet.</p>
                <p class="text-sm text-gray-500">12.3.2016</p>
            </div>
        </div>
    </section>
</x-layout>



{{-- <section class="container py-20 mx-auto">
    <div class="grid grid-cols-3 gap-4">
        @foreach($news as $item)
            <div class="bg-white shadow-md rounded-md p-6">
                <img src="{{ $item->image }}" alt="{{ $item->title }}" class="mb-4">
                <h2 class="text-2xl font-bold mb-2">{{ $item->title }}</h2>
                <p class="text-gray-700">{{ $item->excerpt }}</p>
                <p class="text-sm text-gray-500">{{ $item->date->format('F j, Y') }}</p>
                <a href="/news/{{ $item->id }}" class="text-blue-500 hover:underline mt-2 inline-block">Read More</a>
            </div>
        @endforeach
    </div>
</section> --}}
