<div x-data="{ open: false }">
    <x-secondary-button class="mt-3" @click="open = true">{{ __('Lisää kategoria') }}</x-secondary-button>
    <div class="fixed inset-0 z-10 overflow-y-auto" x-show="open" x-cloak>
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="open = false">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <!-- Close button -->
                    <div class="absolute top-0 right-0 pt-4 pr-4">
                        <button type="button" @click="open = false" class="text-gray-400 hover:text-gray-500">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                    </div>
                    <livewire:admin.product.category-create />


                    <div class="pl-4">
                        <div class="flow-root">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <tbody class="divide-y divide-gray-200">
                                            @foreach ($categories as $category)
                                                <tr wire:key="category-row-{{$category->id}}">
                                                    <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-0">{{ $category->name }}</td>
                                                    <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-0">
                                                        <div>
                                                            <livewire:admin.product.category-delete :category="$category" wire:key="category-delete-{{ $category->id }}" />
                                                        </div>
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
            </div>
        </div>
    </div>
</div>
