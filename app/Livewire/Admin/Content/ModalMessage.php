<?php
namespace App\Livewire\admin\content;

use Livewire\Component;


class ModalMessage extends Component
{
    public $saved = false;
    public $error = false;

    protected $listeners = [
        'modalSaved' => 'showSavedMessage',
        'modalError' => 'showErrorMessage',
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
        return view('livewire.admin.content.modal-message');
    }
}
