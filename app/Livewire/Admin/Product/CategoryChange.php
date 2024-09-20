<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use Livewire\Component;

class CategoryChange extends Component
{
    public $categories = [];
    public $subcategories = [];
    public $categoryId;

    public function mount()
    {
        $this->categories = Category::where('parentId', null)->latest()->get();
    }

    public function render()
    {
        return view('livewire.admin.product.category-change');
    }

    public function updatedCategoryId()
    {
        if ($this->categoryId) {
            $this->subcategories = Category::where('parentId', $this->categoryId)->latest()->get();
        }
    }
}
