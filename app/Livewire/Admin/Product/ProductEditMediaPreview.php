<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Media;
use App\Models\Product;

class ProductEditMediaPreview extends Component
{
    public $mediaId;
    public $productId;

    protected $listeners = [
        'productImageSelectedEdit' => 'setMediaId',
        'productUpdated' => 'resetMediaId',
    ];

    public function mount($productId, $mediaId = null)
    {
    $this->productId = $productId;
        $this->mediaId = $mediaId;
    }

    public function getMediaProperty()
    {
        return Media::find($this->mediaId);
    }

    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;
    }

    public function resetMediaId()
    {
        // $this->mediaId = null;
        $product = Product::find($this->productId);
        $this->mediaId = $product->media_id;
    }

    public function render()
    {
        return view('livewire.admin.product.product-edit-media-preview', [
            'media' => $this->media,
            'selectedImage' => $this->media,
        ]);
    }
}
