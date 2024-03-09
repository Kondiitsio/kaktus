<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Category;

class CategoryList extends Component
{
    public $categories;
    protected $listeners = ['refreshCategoryList' => 'refreshCategories'];

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
        return view('livewire.admin.product.category-list');
    }
}
