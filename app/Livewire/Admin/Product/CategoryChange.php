<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use Modules\Brand\Models\Brand;
use Modules\Category\Models\Category;

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
        $data['brands'] = Brand::latest()->get();
        return view('livewire.admin.product.category-change', $data);
    }

    public function updatedCategoryId()
    {
        if ($this->categoryId) {
            $this->subcategories = Category::where('parentId', $this->categoryId)->latest()->get();
        }
    }
}
