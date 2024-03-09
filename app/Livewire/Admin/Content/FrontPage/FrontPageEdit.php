<?php

namespace App\Livewire\Admin\Content\FrontPage;


use Livewire\Component;


class FrontPageEdit extends Component
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
        return view('livewire.admin.content.frontPage.front-page-edit');
    }
}
