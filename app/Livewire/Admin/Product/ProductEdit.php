<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class ProductEdit extends Component
{
    public $categories = [];
    public $selectedCategories = [];
    public $product;

    protected $listeners = [
        'refreshCategoryList' => 'refreshCategories',
        'productImageSelectedEdit' => 'setMediaId',
    ];

    public function mount(Product $product)
    {
        $this->product = $product->toArray();
        $this->selectedCategories = $product->categories->pluck('id')->toArray();
        $this->categories = Category::all();
    }

    public function setMediaId($mediaId)
    {
        $this->product['media_id'] = $mediaId;
    }

    protected $rules = [
        'product.name' => 'required|max:50',
        'product.description' => 'required|max:255',
        'product.price' => 'required|numeric',
    ];

    public function update()
    {
        $this->validate();

        $product = Product::find($this->product['id']);

        $product->update([
            'name' => $this->product['name'],
            'description' => $this->product['description'],
            'price' => $this->product['price'],
            'media_id' => $this->product['media_id'],
        ]);

        $product->categories()->sync($this->selectedCategories);

        $this->dispatch('refreshProductList');
        $this->dispatch('productUpdated');
        $this->dispatch('modalSaved');

    }

    public function refreshCategories()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.admin.product.product-edit');
    }
}
