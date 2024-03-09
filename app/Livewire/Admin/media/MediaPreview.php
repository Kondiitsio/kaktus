<?php
namespace App\Livewire\Admin\Media;

use Livewire\Component;
use App\Models\Media;

class MediaPreview extends Component
{
    public $mediaId;
    public $formType;


    protected $listeners = [
        'productImageSelected' => 'setMediaId',
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
        return view('livewire.admin.media.media-preview', [
            'media' => $this->media,
            'selectedImage' => $this->media,
        ]);
    }
}
?>
