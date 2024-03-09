<?php

namespace App\Livewire\Admin\Media;

use Livewire\Component;

class MediaLibraryAll extends Component
{

    public $selectedTab = 'content';

    public function selectTab($tab)
    {
        $this->selectedTab = $tab;
    }

    public function render()
    {
        return view('livewire.admin.media.media-library-all');
    }
}
