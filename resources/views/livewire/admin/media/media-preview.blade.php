<div class="flex-shrink-0 mt-2 ml-2 h-11 w-11">
    @if ($media)
        <img class="rounded-full h-11 w-11" src="{{ asset('storage/' . $selectedImage->file_name) }}" alt="Selected Image">
    @endif
</div>
