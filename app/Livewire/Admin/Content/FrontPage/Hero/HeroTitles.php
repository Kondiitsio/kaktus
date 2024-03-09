<?php

namespace App\Livewire\Admin\Content\FrontPage\Hero;

use Livewire\Component;
use App\Models\Hero;

class HeroTitles extends Component
{
    public $title;
    public $subtitle;

    protected $listeners = ['formSubmitted' => 'handleFormSubmission', 'actionCancelled' => 'handleActionCancellation'];

    public function mount()
    {
        $hero = Hero::first();

        if ($hero) {
            $this->title = $hero->title;
            $this->subtitle = $hero->subtitle;
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

        $hero = Hero::first();

        if ($hero && $this->title && $this->subtitle) {
            $hero->update([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
            ]);
        }

        $this->dispatch('saved');

    }

    public function handleActionCancellation()
    {
        $hero = Hero::first();

        if ($hero) {
            $this->title = $hero->title;
            $this->subtitle = $hero->subtitle;
        }

        $this->dispatch('cancelled');
    }

    public function render()
    {
        return view('livewire.admin.content.frontPage.hero.hero-titles');
    }
}
