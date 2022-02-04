<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog as News;
use App\Models\Category;

class Blog extends Component
{
    public $blogs, $categories;
    public $category, $order_by = "DESC";

    protected $queryString = ['category','order_by'];

    protected $listeners = ['showMore'];

    public function mount(){
        $this->categories = Category::where('status', 1)->get();
    }

    public function render()
    {
        $this->blogs = News::with(['category','user'])->where('status', 1)->when($this->category, function($query, $category){
            $query->category($category);
        })->when($this->order_by, function($query, $order_by){
            $query->orderBy('created_at', $order_by);
        })->get();
        return view('livewire.blog')->extends('layouts.app');
    }

    public function showMore(){
        $this->take = $this->take + 10;
    }
}
