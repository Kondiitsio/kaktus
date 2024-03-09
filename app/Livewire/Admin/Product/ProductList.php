<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;

class ProductList extends Component
{

    public $products;
    public $selectedProducts = [];
    public $selectAll = false;
    public $bulkDisabled = true;

    protected $listeners = ['refreshProductList' => 'mount'];

    public function mount()
    {
        $this->products = Product::all();
    }

    public function deleteSelected()
    {
        Product::query()
            ->whereIn('id', $this->selectedProducts)
            ->delete();
        $this->selectedProducts = [];
        $this->selectAll = false;
        $this->mount();
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selectedProducts = Product::pluck('id');

        } else {
            $this->selectedProducts = [];
        }
    }

    public function render()
    {
        $this->bulkDisabled = count($this->selectedProducts) < 1;

        return view('livewire.admin.product.product-list');
    }
}
