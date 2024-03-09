<div class="px-4 sm:px-6 lg:px-8" x-data="{ checkAll: false }" x-init="() => { $watch('checkAll', value => { const checkboxes = $refs.checkboxes.querySelectorAll('input[type=checkbox]'); checkboxes.forEach(checkbox => { checkbox.checked = value; }); }); }">

    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <livewire:admin.product.category-list />
      </div>
      <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
        <livewire:admin.product.product-create :key="'create-form'" />
      </div>
    </div>
    <div class="flow-root mt-8">
      <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
          <div class="relative">
            <!-- Selected row actions, only show when rows are selected. -->
            <div class="absolute top-0 flex items-center h-12 space-x-3 bg-white left-14 sm:left-12">

            <button type="button" wire:click.prevent="deleteSelected" class="@if ($bulkDisabled) @endif inline-flex items-center px-2 py-1 text-sm font-semibold text-gray-900 bg-white rounded shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 disabled:cursor-not-allowed disabled:opacity-30 disabled:hover:bg-white">Poista</button>
            </div>

            <table class="min-w-full divide-y divide-gray-300 table-fixed">
              <thead>
                <tr>
                  <th scope="col" class="relative px-7 sm:w-12 sm:px-6">
                    <input type="checkbox" wire:model="selectAll" x-model="checkAll" class="absolute w-4 h-4 -mt-2 text-indigo-600 border-gray-300 rounded left-4 top-1/2 focus:ring-indigo-600">
                  </th>
                  <th scope="col" class="min-w-[12rem] py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">Nimi</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Hinta</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Kuva</th>
                  <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-3">
                    <span class="sr-only">Muokkaa</span>
                  </th>
                </tr>
              </thead>

                <tbody class="bg-white divide-y divide-gray-200" x-ref="checkboxes">

                <!-- Selected: "bg-gray-50" -->
                @foreach($products as $product)
                <tr wire:key="product-row-{{$product->id}}">
                  <td class="relative px-7 sm:w-12 sm:px-6">
                    <!-- Selected row marker, only show when row is selected. -->
                    {{-- <div class="absolute inset-y-0 left-0 w-0.5 bg-indigo-600"></div> --}}

                    <input type="checkbox" wire:model="selectedProducts" value="{{ $product->id }}" class="absolute w-4 h-4 -mt-2 text-indigo-600 border-gray-300 rounded left-4 top-1/2 focus:ring-indigo-600">
                  </td>
                  <!-- Selected: "text-indigo-600", Not Selected: "text-gray-900" -->
                  <td class="py-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap">{{ $product->name }}</td>
                  <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $product->price }}€</td>
                  <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                    <div class="flex-shrink-0 h-11 w-11">
                        @if($product->media)
                        <img class="rounded-full h-11 w-11" src="{{ asset('storage/' . $product->media->file_name) }}" alt="{{ $product->name }}">
                        @endif
                    </div>

                  </td>
                  <td class="py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-3">
                    <livewire:admin.product.product-edit :product="$product" wire:key="product-edit-{{ $product['id'] }}" />
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
