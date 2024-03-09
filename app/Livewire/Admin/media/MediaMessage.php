<?php

namespace App\Livewire\Admin\Media;

use Livewire\Component;

class MediaMessage extends Component
{
    public $saved = false;
    public $error = false;

    protected $listeners = [
        'mediaSaved' => 'showSavedMessage',
        'mediaError' => 'showErrorMessage',
    ];

    public function showSavedMessage()
    {
        $this->saved = true;
        $this->dispatch('message-shown');
        $this->dispatch('reset-messages');
    }

    public function showErrorMessage()
    {
        $this->error = true;
        $this->dispatch('message-shown');
        $this->dispatch('reset-messages');
    }

    public function resetMessages()
    {
        $this->saved = false;
        $this->error = false;
    }

    public function render()
    {
        return view('livewire.admin.media.media-message');
    }
}
