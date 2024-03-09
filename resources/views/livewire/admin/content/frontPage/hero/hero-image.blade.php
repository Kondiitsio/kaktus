<div>
    @if ($selectedImage)
        <img class="mt-8 rounded-md h-[15rem]" src="{{ asset('storage/' . $selectedImage->file_name) }}" alt="Hero Image">
    @endif
</div>

