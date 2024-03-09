<?php

namespace App\Livewire\Admin\Content\Contact;

use Livewire\Component;

class ContactEdit extends Component
{
    public function submit()
    {
        $this->dispatch('formSubmitted');
    }

    public function cancel()
    {
        $this->dispatch('actionCancelled');
    }

    public function render()
    {
        return view('livewire.admin.content.contact.contact-edit');
    }
}
