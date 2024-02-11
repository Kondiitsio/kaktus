<x-layout>


<section class="container py-20 mx-auto px-6 bg-[#FFF5F5] rounded-md mb-10">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div>

            <h2 class="text-3xl font-bold tracking-tight text-gray-900">Ota yhteyttä</h2>
            <p class="my-6 leading-7 text-gray-600">Tässä lomakkeessa ei tarvitse käyttää oikeita tietoja.</p>

        <form>
            <div class="grid max-w-2xl grid-cols-1 gap-y-6 sm:grid-cols-6 md:col-span-2">
                <div class="sm:col-span-4">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nimi</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name" autocomplete="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Sähköposti</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="subject" class="block text-sm font-medium leading-6 text-gray-900">Yhteyden oton aihe</label>
                    <div class="mt-2">
                        <select id="subject" name="subject" autocomplete="subject" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>kysymys tuotteista</option>
                            <option>tilaus</option>
                            <option>yhteydenottopyyntö</option>
                            <option>muu</option>
                        </select>
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="message" class="block text-sm font-medium leading-6 text-gray-900">Viesti</label>
                    <div class="mt-2">
                        <textarea name="message" id="message" autocomplete="message" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                <div class="col-span-full">
                    <fieldset>
                        <div class="mt-6 space-y-6">
                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="terms" name="terms" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="terms" class="font-medium text-gray-900">Olen lukenut käyttöehdot</label>
                                    <p class="text-gray-500">Lue lisää käyttöehdoista <a href="/kauttoehdot" class="text-indigo-600">tästä</a></p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <button type="submit" class="mt-10 rounded-md bg-indigo-600 px-10 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Lähetä</button>
                </div>
            </div>

        </form>
    </div>
<div class="mt-10 lg:mt-0">

        <h2 class="text-3xl font-bold tracking-tight text-gray-900">{{ $yhteystiedot->stores_title }}</h2>
        <p class="my-6 leading-7 text-gray-600">{{ $yhteystiedot->stores_subtitle }}</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @foreach ($stores as $store)
        <div class="rounded-md bg-white p-10">
            <h3 class="text-base font-semibold leading-7 text-gray-900">{{ $store->contactInfo->city }}</h3>
            <dl class="mt-3 space-y-1 text-sm leading-6 text-gray-600">
                <div class="mt-1">
                    <dt class="sr-only">Katuosoite</dt>
                    <dd>{{ $store->contactInfo->street_address }}</dd>
                </div>
                <div class="mt-1">
                    <dt class="sr-only">Postinumero & Kaupunki</dt>
                    <dd>{{ $store->contactInfo->zip_code }}</dd>
                </div>
                <div>
                    <dt class="sr-only">Sähköposti</dt>
                    <dd><a class="font-semibold text-indigo-600" href="mailto:collaborate@example.com">{{ $store->contactInfo->email }}</a></dd>
                </div>
                <div class="mt-1">
                    <dt class="sr-only">Puhelinnumero</dt>
                    <dd>{{ $store->contactInfo->phone }}</dd>
                </div>
                <div class="mt-1">
                    <dt class="sr-only">Aukioloajat</dt>
                    <dd>{{ $store->contactInfo->open_hours }}</dd>
                </div>
            </dl>
        </div>
        @endforeach
    </div>
</div>

</div>
</section>



</x-layout>
