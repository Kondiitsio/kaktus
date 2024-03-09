<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Media;
use App\Models\Product;

class ProductEditMediaPicker extends Component
{
    public $category = 'product';
    public $media;
    public $selectedImage = null;
    public $productId;
    // public $mediaId;

    public function selectImage($mediaId)
    {
        $this->selectedImage = Media::findOrFail($mediaId);
        $this->dispatch('productImageSelectedEdit', $this->selectedImage->id);
    }

    protected $listeners = [
        'refreshMediaLibrary' => 'refreshLibrary',
        // 'modalClosed' => 'resetSelection',
        // 'productUpdated' => 'resetMediaId'
    ];

//     public function resetSelection()
// {
//     $this->selectedImage = null;
// }

// public function mount($productId, $mediaId = null)
// {
// $this->productId = $productId;
//     $this->mediaId = $mediaId;
// }

//     public function resetMediaId()
// {
//     $product = Product::find($this->productId);
//     $this->media = $product->media_id;
// }

    public function refreshLibrary()
    {
        $this->media = Media::get();
    }

    public function render()
    {
        $mediaItems = Media::where('category', $this->category)->get();

        return view('livewire.admin.product.product-edit-media-picker', [
            'mediaItems' => $mediaItems,
        ]);
    }
}
