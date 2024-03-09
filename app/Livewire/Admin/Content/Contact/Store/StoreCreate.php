<?php

namespace App\Livewire\Admin\Content\Contact\Store;

use Livewire\Component;
use App\Models\Stores;


class StoreCreate extends Component {
    public $stores;
    public $store = ['name' => '', 'city' => '', 'street_address' => '', 'zip_code' => '', 'email' => '', 'phone' => '', 'open_hours' => ''];

    protected $rules = [
        'store.name' => 'required|max:50',
        'store.city' => 'required|max:50',
        'store.street_address' => 'required|max:50',
        'store.zip_code' => ['required', 'regex:/^[a-zA-Z0-9\s-]+$/'],
        'store.email' => 'required|email|max:50',
        'store.phone' => ['required', 'max:20', 'regex:/^[\s+]*\d[\d\s+]*$/'],
        'store.open_hours' => 'required|max:50',
    ];

    public function create()
    {
        $this->validate();

        $store = Stores::create([
            'name' => $this->store['name'],
        ]);

        $store->contactInfo()->create([
            'city' => $this->store['city'],
            'street_address' => $this->store['street_address'],
            'zip_code' => $this->store['zip_code'],
            'email' => $this->store['email'],
            'phone' => $this->store['phone'],
            'open_hours' => $this->store['open_hours'],
        ]);

        // Add the new store to the stores array
        $this->stores[] = [
            'id' => $store->id,
            'name' => $store->name,
            'city' => $store->contactInfo->city,
            'street_address' => $store->contactInfo->street_address,
            'zip_code' => $store->contactInfo->zip_code,
            'email' => $store->contactInfo->email,
            'phone' => $store->contactInfo->phone,
            'open_hours' => $store->contactInfo->open_hours,
        ];

        $this->reset('store');
        $this->dispatch('refreshStoreList');
        $this->dispatch('modalSaved');
    }

    public function render()
    {
        return view('livewire.admin.content.contact.store.store-create');
    }
}
