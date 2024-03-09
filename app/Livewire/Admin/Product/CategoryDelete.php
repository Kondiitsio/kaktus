<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Category;

class CategoryDelete extends Component
{
    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function delete()
    {
        $this->category->delete();
        $this->dispatch('refreshCategoryList');
    }

    public function render()
    {
        return view('livewire.admin.product.category-delete');
    }
}
