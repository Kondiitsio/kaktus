<?php

namespace App\Livewire\Admin\Media;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Media;
use App\Models\Hero;
use App\Models\Product;

class MediaLibrary extends Component
{
    public $selectedImage = null;
    public $media;
    public $category;

    protected $listeners = ['refreshMediaLibrary' => 'refreshLibrary', 'productImageSelected' => 'setMediaId'];


    public function mount($category = null)
    {
        $this->category = $category;
    }

public $formType;




    public function selectImage($mediaId)
    {
        $this->selectedImage = Media::findOrFail($mediaId);

        if ($this->selectedImage->category == 'content') {
            // Save the selected image as the hero image
            $hero = Hero::first();
            if ($hero) {
                $hero->media_id = $this->selectedImage->id;
                $hero->save();
            } else {
                Hero::create(['media_id' => $this->selectedImage->id]);
            }

            // Emit an event with the ID of the selected image
            $this->dispatch('imageSelected', $this->selectedImage->id);
        } elseif ($this->selectedImage->category == 'product') {
            // dispatch a different event for product images
            $this->dispatch('productImageSelected', $this->selectedImage->id);
        }
        $this->dispatch('mediaSaved');
    }


    public function refreshLibrary()
    {
        $this->media = Media::get();
    }

    public function render()
    {
        $mediaItems = $this->category
            ? Auth::user()->media->where('category', $this->category)
            : Auth::user()->media;
        $heroImageId = Hero::first()->media_id ?? null;
        $productImageId = Product::first()->media_id ?? null;

        return view('livewire.admin.media.media-library', [
            'mediaItems' => $mediaItems,
            'heroImageId' => $heroImageId,
            'productImageId' => $productImageId,
        ]);
    }
}
