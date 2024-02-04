<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Etusivu;

class UpdateEtusivuForm extends Component
{
    public $title;
    public $sub_title;

    public function mount()
    {
        $etusivu = Etusivu::first();

        if ($etusivu) {
            $this->title = $etusivu->title;
            $this->sub_title = $etusivu->sub_title;
        }
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ], [
            'title.required' => 'Otsikko on pakollinen',
            'sub_title.required' => 'Alateksti on pakollinen',
        ]);

        $etusivu = Etusivu::first();

        if ($etusivu) {
            $etusivu->update([
                'title' => $this->title,
                'sub_title' => $this->sub_title,
            ]);
        }

        // Dispatch an event
        $this->dispatch('message', 'Tallennus onnistui');
    }
        //Confirm cancel/peruuta
    public function confirmAction()
    {
        $etusivu = Etusivu::first();

        if ($etusivu) {
            $this->title = $etusivu->title;
            $this->sub_title = $etusivu->sub_title;

        }

        $this->dispatch('message', 'Muutokset peruutettu');
    }


    public function render()
    {
        return view('livewire.sisalto.update-etusivu-form');
    }
}
