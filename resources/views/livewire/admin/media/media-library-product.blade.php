<div>
   <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($mediaItems as $mediaItem)
        <li class="relative" wire:key="media-item-{{ $mediaItem->id }}">
            <div class="block w-full overflow-hidden bg-gray-100 rounded-lg group aspect-h-7 aspect-w-10 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
            <img src="{{ asset('storage/' . $mediaItem->file_name) }}" alt="{{ $mediaItem->name }}">
            </div>
            @if (\App\Models\Product::isMediaItemUsed($mediaItem->id))
                <p>Käytössä</p>
            @else
                <livewire:admin.media.media-delete :mediaItem="$mediaItem" :key="$mediaItem->id" />
            @endif
        </li>
        @endforeach
    </ul>
    <div class="mt-4">
        <livewire:admin.media.media-upload :category="$category" />
    </div>
</div>
