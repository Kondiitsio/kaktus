<?php

namespace App\Livewire\Admin\Content\Contact\Store;

use Livewire\Component;
use App\Models\Store;

class StoreTitles extends Component
{
    public $title;
    public $subtitle;

    protected $listeners = ['formSubmitted' => 'handleFormSubmission', 'actionCancelled' => 'handleActionCancellation'];

    public function mount()
    {
        $store = Store::first();

        if ($store) {
            $this->title = $store->title;
            $this->subtitle = $store->subtitle;
        }
    }

    public function handleFormSubmission()
    {
        $this->validate([
            'title' => 'required|min:3|max:50',
            'subtitle' => 'required|min:3|max:100',
        ], [
            'title.required' => 'Otsikko on pakollinen',
            'title.min' => 'Otsikon on oltava vähintään 3 merkkiä',
            'title.max' => 'Otsikko saa olla enintään 50 merkkiä',
            'subtitle.min' => 'Alatekstin on oltava vähintään 3 merkkiä',
            'subtitle.max' => 'Alateksti saa olla enintään 100 merkkiä',
        ]);

        $store = Store::first();

        if ($store && $this->title && $this->subtitle) {
            $store->update([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
            ]);
        }

        $this->dispatch('saved');

    }

    public function handleActionCancellation()
    {
        $store = Store::first();

        if ($store) {
            $this->title = $store->title;
            $this->subtitle = $store->subtitle;
        }

        $this->dispatch('cancelled');
    }

    public function render()
    {
        return view('livewire.admin.content.contact.store.store-titles');
    }
}
