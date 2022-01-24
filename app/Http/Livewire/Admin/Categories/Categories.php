<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $categories;
    public $category;

    public function mount(){
        $this->categories = Category::where('status', 1)->get();
    }

    public function render()
    {
        return view('livewire.admin.categories.categories')->extends('layouts.admin');
    }

    public function edit(Category $category)
    {
        $this->category = $category;
    }
}
