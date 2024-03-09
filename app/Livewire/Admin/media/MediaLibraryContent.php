<?php

namespace App\Livewire\Admin\Media;

use Livewire\Component;
use App\Models\Media;

class MediaLibraryContent extends Component
{
    public $category = 'content';
    public $media;

    protected $listeners = ['refreshMediaLibrary' => 'refreshLibrary'];

    public function refreshLibrary()
    {
        $this->media = Media::get();
    }

    public function render()
    {
        $mediaItems = Media::where('category', $this->category)->get();

        return view('livewire.admin.media.media-library-content', [
            'mediaItems' => $mediaItems,
        ]);
    }
}
