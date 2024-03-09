<?php

namespace App\Livewire\Admin\Media;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\Models\Hero;

class MediaDelete extends Component
{
    public $mediaItem;

    public function deleteMedia($mediaId)
    {

        $hero = Hero::first();

        //Check if the media item is the currently selected hero image
        if ($hero && $hero->media_id == $mediaId) {
            // Prevent deletion
            return;
        }

        // Delete the file associated with the media item
        Storage::disk('public')->delete($this->mediaItem->file_name);

        // Delete the media item
        $this->mediaItem->delete();


        $this->dispatch('refreshMediaLibrary');


    }

    public function render()
    {
        return view('livewire.admin.media.media-delete');
    }
}
