<?php

namespace App\Livewire\Admin\Content\Contact\Store;

use Livewire\Component;
use App\Models\Stores;

class StoreDelete extends Component
{
    public $store;

    public function mount(Stores $store)
    {
        $this->store = $store;
    }

    public function delete()
    {
        $this->store->contactInfo()->delete();
        $this->store->delete();

        $this->dispatch('refreshStoreList');
        // $this->dispatch('deleted'); // This works but causes an error after message is displayed
    }

    public function render()
    {
        return view('livewire.admin.content.contact.store.store-delete');
    }
}
