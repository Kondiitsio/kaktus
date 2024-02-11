<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Etusivu;

class UpdateEtusivuForm extends Component
{
    public $title;
    public $subtitle;

    public function mount()
    {
        $etusivu = Etusivu::first();

        if ($etusivu) {
            $this->title = $etusivu->title;
            $this->subtitle = $etusivu->subtitle;
        }
    }

    public function submit()
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

        // Dispatch an event
        $this->dispatch('saved');

        $etusivu = Etusivu::first();

        if ($etusivu) {
            $etusivu->update([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
            ]);
        }


    }
        //Confirm cancel/peruuta
    public function confirmActionCancel()
    {
        $etusivu = Etusivu::first();

        if ($etusivu) {
            $this->title = $etusivu->title;
            $this->subtitle = $etusivu->subtitle;

        }

        $this->dispatch('message', 'Muutokset peruutettu');
    }


    public function render()
    {
        return view('livewire.sisalto.update-etusivu-form');
    }
}
