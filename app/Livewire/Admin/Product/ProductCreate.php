<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class ProductCreate extends Component
{
    public $categories = [];
    public $selectedCategories = [];

    public $product = ['name' => '', 'description' => '', 'price' => '', 'media_id' => ''];


    protected $listeners = [
        'refreshCategoryList' => 'refreshCategories',
        'productImageSelectedCreate' => 'setMediaId',
    ];


    public function setMediaId($mediaId)
    {
        $this->product['media_id'] = $mediaId;
    }


    protected $rules = [
        'product.name' => 'required|max:50',
        'product.description' => 'required|max:255',
        'product.price' => 'required|numeric',
    ];

    public function create()
    {

        $this->validate();

        $product = Product::create([
            'name' => $this->product['name'],
            'description' => $this->product['description'],
            'price' => $this->product['price'],
            'media_id' => $this->product['media_id'],
        ]);

        $product->categories()->attach($this->selectedCategories);

        $this->reset('product');
        $this->reset('selectedCategories');
        $this->dispatch('productCreated');
        $this->dispatch('refreshProductList');
        $this->dispatch('modalSaved');

    }


    public function mount()
    {
        $this->categories = Category::all();
    }

    public function refreshCategories()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.admin.product.product-create');
    }
}
