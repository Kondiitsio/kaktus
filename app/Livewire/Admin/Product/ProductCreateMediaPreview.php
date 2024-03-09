<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Media;

class ProductCreateMediaPreview extends Component
{
    public $mediaId;

    protected $listeners = [
        'productImageSelectedCreate' => 'setMediaId',
        'productCreated' => 'resetMediaId',

    ];

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
        $this->mediaId = null;
    }


    public function render()
    {
        return view('livewire.admin.product.product-create-media-preview', [
            'media' => $this->media,
            'selectedImage' => $this->media,
        ]);
    }
}
