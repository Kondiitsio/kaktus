<?php

namespace App\Livewire\Admin\Media;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Media;
use Illuminate\Validation\ValidationException;

class MediaUpload extends Component
{
    use WithFileUploads;

    public $media;
    public $category = 'content'; // Default category

    public function mount($category = null)
    {
        if ($category) {
            $this->category = $category;
        }
    }

    public function save()
    {

        try {
            $this->validate([
                'media' => 'required|image|max:1024', // 1MB Max
            ]);

            $fileName = $this->media->store('media', 'public');

            Media::create([
                'user_id' => auth()->id(),
                'file_name' => $fileName,
                'category' => $this->category,
            ]);

            $this->reset('media');
            $this->dispatch('refreshMediaLibrary');
            $this->dispatch('mediaSaved');
        } catch (ValidationException $e) {
            $this->dispatch('mediaError');
        }
    }

    public function updatedMedia()
    {
        $this->save();
    }

    public function render()
    {
        return view('livewire.admin.media.media-upload');
    }
}
