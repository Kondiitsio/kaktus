<?php
namespace App\Livewire\Admin\Content\Contact\Store;

use Livewire\Component;
use App\Models\Stores;

class StoreEdit extends Component
{
    public $store;
    public $deleteOpen;

    protected $rules = [
        'store.name' => 'required|max:50',
        'store.city' => 'required|max:50',
        'store.street_address' => 'required|max:50',
        'store.zip_code' => ['required', 'regex:/^[a-zA-Z0-9\s-]+$/'],
        'store.email' => 'required|email|max:50',
        'store.phone' => ['required', 'max:20', 'regex:/^[\s+]*\d[\d\s+]*$/'],
        'store.open_hours' => 'required|max:50',
    ];


    public function mount(Stores $store)
    {
        $this->store = $store->toArray();
        $this->store['name'] = $store->name;
        $this->store['city'] = optional($store->contactInfo)->city;
        $this->store['street_address'] = optional($store->contactInfo)->street_address;
        $this->store['zip_code'] = optional($store->contactInfo)->zip_code;
        $this->store['email'] = optional($store->contactInfo)->email;
        $this->store['phone'] = optional($store->contactInfo)->phone;
        $this->store['open_hours'] = optional($store->contactInfo)->open_hours;
    }

    public function update()
    {
        $this->validate();

        $store = Stores::find($this->store['id']);
        $store->update(['name' => $this->store['name']]);

        if ($store->contactInfo) {
            $store->contactInfo->update([
                'city' => $this->store['city'],
                'street_address' => $this->store['street_address'],
                'zip_code' => $this->store['zip_code'],
                'email' => $this->store['email'],
                'phone' => $this->store['phone'],
                'open_hours' => $this->store['open_hours']
            ]);
        } else {
            $store->contactInfo()->create([
                'city' => $this->store['city'],
                'street_address' => $this->store['street_address'],
                'zip_code' => $this->store['zip_code'],
                'email' => $this->store['email'],
                'phone' => $this->store['phone'],
                'open_hours' => $this->store['open_hours']
            ]);
        }

        $this->dispatch('refreshStoreList');
        $this->dispatch('modalSaved');
    }


    public function render()
    {
        return view('livewire.admin.content.contact.store.store-edit');
    }
}
?>


