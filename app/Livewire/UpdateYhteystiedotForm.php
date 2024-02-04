<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Yhteystiedot;

class UpdateYhteystiedotForm extends Component
{
    public $title;
    public $content;

    public function mount()
    {
        $yhteystiedot = Yhteystiedot::first();

        if ($yhteystiedot) {
            $this->title = $yhteystiedot->title;
            $this->content = $yhteystiedot->content;
        }
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $yhteystiedot = Yhteystiedot::first();

        if ($yhteystiedot) {
            $yhteystiedot->update([
                'title' => $this->title,
                'content' => $this->content,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.sisalto.update-yhteystiedot-form');
    }
}
