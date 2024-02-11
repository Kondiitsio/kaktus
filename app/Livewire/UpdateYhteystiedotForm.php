<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Yhteystiedot;
use App\Models\Store;

class UpdateYhteystiedotForm extends Component
{
    public $stores_title;
    public $stores_subtitle;
    public $stores;
    public $newStore = ['name' => '', 'city' => '', 'street_address' => '', 'zip_code' => '', 'email' => '', 'phone' => '', 'open_hours' => ''];


    public function mount()
    {
        $yhteystiedot = Yhteystiedot::first();

        if ($yhteystiedot) {
            $this->stores_title = $yhteystiedot->stores_title;
            $this->stores_subtitle = $yhteystiedot->stores_subtitle;
        }

        // Fetch all stores with their associated contact info
        $stores = Store::with('contactInfo')->get();

        $this->stores = $stores->map(function ($store) {
            return [
                'id' => $store->id,
                'name' => $store->name,
                'city' => $store->contactInfo->city,
                'street_address' => $store->contactInfo->street_address,
                'zip_code' => $store->contactInfo->zip_code,
                'email' => $store->contactInfo->email,
                'phone' => $store->contactInfo->phone,
                'open_hours' => $store->contactInfo->open_hours,
            ];
        })->toArray();
    }

    public function createStore()
{
    $this->validate([
        'newStore.name' => 'required|min:3|max:50',
        'newStore.city' => 'required|min:3|max:50',
        'newStore.street_address' => 'required|min:3|max:255',
        'newStore.zip_code' => 'required|min:3|max:10',
        'newStore.email' => 'required|email|max:255',
        'newStore.phone' => 'required|min:3|max:20',
        'newStore.open_hours' => 'required|min:3|max:255',
    ]);

    $store = Store::create([
        'name' => $this->newStore['name'],
        // Add other store attributes here
    ]);
    $store->contactInfo()->create([
        'city' => $this->newStore['city'],
        'street_address' => $this->newStore['street_address'],
        'zip_code' => $this->newStore['zip_code'],
        'email' => $this->newStore['email'],
        'phone' => $this->newStore['phone'],
        'open_hours' => $this->newStore['open_hours'],
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

    // Reset the new store form
    $this->newStore = ['name' => '', 'city' => '', 'street_address' => '', 'zip_code' => '', 'email' => '', 'phone' => '', 'open_hours' => ''];
    }

    public function submit()
    {
        $this->validate([
            'stores_title' => 'required|min:3|max:50',
            'stores_subtitle' => 'required|min:3|max:255',
        ], [
            'stores_title.required' => 'Otsikko on pakollinen',
            'stores_title.min' => 'Otsikon on oltava vähintään 3 merkkiä',
            'stores_title.max' => 'Otsikko saa olla enintään 50 merkkiä',
            'stores_subtitle.min' => 'Alatekstin on oltava vähintään 3 merkkiä',
            'stores_subtitle.max' => 'Alateksti saa olla enintään 255 merkkiä',
        ]);

        // Dispatch an event
        $this->dispatch('saved');

        $yhteystiedot = Yhteystiedot::first();

        if ($yhteystiedot) {
            $yhteystiedot->update([
                'stores_title' => $this->stores_title,
                'stores_subtitle' => $this->stores_subtitle,
            ]);
        }


        foreach ($this->stores as $storeData) {
            $store = Store::find($storeData['id']);

            // Update the store's contact info
            $store->contactInfo->update([
                'city' => $storeData['city'],
                'street_address' => $storeData['street_address'],
                'zip_code' => $storeData['zip_code'],
                'email' => $storeData['email'],
                'phone' => $storeData['phone'],
                'open_hours' => $storeData['open_hours'],
            ]);
        }

    }

    //Confirm cancel/peruuta
    public function confirmActionCancel()
    {
        $yhteystiedot = Yhteystiedot::first();

        if ($yhteystiedot) {
            $this->stores_title = $yhteystiedot->stores_title;
            $this->stores_subtitle = $yhteystiedot->stores_subtitle;

        }

        // Fetch all stores with their associated contact info
        $stores = Store::with('contactInfo')->get();

        $this->stores = $stores->map(function ($store) {
            return [
                'id' => $store->id,
                'name' => $store->name,
                'city' => $store->contactInfo->city,
                'street_address' => $store->contactInfo->street_address,
                'zip_code' => $store->contactInfo->zip_code,
                'email' => $store->contactInfo->email,
                'phone' => $store->contactInfo->phone,
                'open_hours' => $store->contactInfo->open_hours,
                // Add any other attributes you need
            ];
        })->toArray();

        $this->dispatch('message', 'Muutokset peruutettu');
    }

    public function render()
    {
        return view('livewire.sisalto.update-yhteystiedot-form');
    }
}
