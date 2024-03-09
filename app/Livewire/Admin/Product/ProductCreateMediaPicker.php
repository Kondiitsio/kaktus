<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Media;

class ProductCreateMediaPicker extends Component
{

    public $category = 'product';
    public $media;
    public $selectedImage = null;


    public function selectImage($mediaId)
    {
        $this->selectedImage = Media::findOrFail($mediaId);
        $this->dispatch('productImageSelectedCreate', $this->selectedImage->id);
    }

    protected $listeners = ['refreshMediaLibrary' => 'refreshLibrary'];

    public function refreshLibrary()
    {
        $this->media = Media::get();
    }

    public function render()
    {
        $mediaItems = Media::where('category', $this->category)->get();

        return view('livewire.admin.product.product-create-media-picker', [
            'mediaItems' => $mediaItems,
        ]);
    }
}
