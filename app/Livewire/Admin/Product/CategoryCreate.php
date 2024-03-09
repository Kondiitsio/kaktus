<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Category;

class CategoryCreate extends Component
{
    public $categories;
    public $category = ['name' => ''];

    protected $rules = [
        'category.name' => 'required|max:50',
    ];

    public function create()
    {
        $this->validate();


        $category = Category::create([
            'name' => $this->category['name'],
        ]);


        $this->categories[] = [
            'id' => $category->id,
            'name' => $category->name,
        ];

        $this->reset('category');
        $this->dispatch('refreshCategoryList');
        // $this->dispatch('modalSaved');
    }

    public function render()
    {
        return view('livewire.admin.product.category-create');
    }
}
