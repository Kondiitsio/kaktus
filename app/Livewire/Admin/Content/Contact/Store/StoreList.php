<?php
namespace App\Livewire\Admin\Content\Contact\Store;

use Livewire\Component;
use App\Models\Stores;

class StoreList extends Component
{

    public $stores;
    protected $listeners = ['refreshStoreList' => 'refreshStores'];

    public function mount()
    {
        $this->stores = Stores::with('contactInfo')->get();
    }

    public function refreshStores()
    {
        $this->stores = Stores::with('contactInfo')->get();
    }

    public function render()
    {
        return view('livewire.admin.content.contact.store.store-list');
    }
}
?>
