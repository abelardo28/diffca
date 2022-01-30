<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog as News;
use App\Models\Category;

class Blog extends Component
{
    public $blogs, $categories;
    public $category, $take = 10;

    protected $listeners = ['filterCategory', 'showMore'];

    public function mount(){
        $this->blogs = News::with(['category','user'])->where('status', 1)->latest()->get();
        $this->categories = Category::where('status', 1)->get();
    }

    public function render()
    {
        return view('livewire.blog')->extends('layouts.app');
    }

    public function filterCategory($category){
        $this->blogs = $this->blogs->where('category_id', $category);
    }

    public function showMore(){
        $this->take = $this->take + 10;
    }
}
