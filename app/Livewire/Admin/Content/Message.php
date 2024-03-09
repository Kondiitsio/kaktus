<?php
namespace App\Livewire\admin\content;


use Livewire\Component;


class Message extends Component
{
    public $saved = false;
    public $cancelled = false;
    public $deleted = false;

    protected $listeners = [
        'saved' => 'showSavedMessage',
        'cancelled' => 'showCancelledMessage',
        'deleted' => 'showDeletedMessage',
    ];

    public function showSavedMessage()
    {
        $this->saved = true;
        $this->dispatch('message-shown');
        $this->dispatch('reset-messages');
    }

    public function showCancelledMessage()
    {
        $this->cancelled = true;
        $this->dispatch('message-shown');
        $this->dispatch('reset-messages');
    }

    public function showDeletedMessage()
    {
        $this->deleted = true;
        $this->dispatch('message-shown');
        $this->dispatch('reset-messages');
    }

    public function resetMessages()
    {
        $this->saved = false;
        $this->cancelled = false;
        $this->deleted = false;
    }

    public function render()
    {
        return view('livewire.admin.content.message');
    }
}

