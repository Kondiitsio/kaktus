<?php

namespace App\Livewire\Admin\Media;

use Livewire\Component;
use App\Models\Media;

class MediaLibraryProduct extends Component
{
    public $category = 'product';
    public $media;

    protected $listeners = ['refreshMediaLibrary' => 'refreshLibrary'];

    public function refreshLibrary()
    {
        $this->media = Media::get();
    }

    public function render()
    {
        $mediaItems = Media::where('category', $this->category)->get();

        return view('livewire.admin.media.media-library-product', [
            'mediaItems' => $mediaItems,
        ]);
    }
}
