<?php

namespace App\Livewire\Admin\Content\FrontPage\Hero;

use Livewire\Component;
use App\Models\Media;
use App\Models\Hero;

class HeroImage extends Component
{
    public $selectedImage;

    protected $listeners = [
        'imageSelected' => 'setImage',
        'formSubmitted' => 'handleFormSubmission',
        'actionCancelled' => 'handleActionCancellation',
    ];

    public function mount()
    {
        $hero = Hero::first();

        if ($hero) {
            $this->selectedImage = Media::find($hero->media_id);
        }
    }

    public function setImage($imageId)
    {
        $this->selectedImage = Media::find($imageId);
        if (!$this->selectedImage) {
            $this->selectedImage = null;
            $this->dispatch('heroImageUpdated', ['selectedImage' => $this->selectedImage]);
        }
    }

    public function handleFormSubmission()
    {
        $hero = Hero::first();

        if ($hero && $this->selectedImage) {
            $hero->update([
                'media_id' => $this->selectedImage->id,
            ]);
        }
    }

    public function handleActionCancellation()
    {
        $hero = Hero::first();

        if ($hero) {
            $this->selectedImage = Media::find($hero->media_id);
        }
    }


    public function render()
    {
        return view('livewire.admin.content.frontPage.hero.hero-image');
    }
}
