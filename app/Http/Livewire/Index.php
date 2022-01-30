<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class Index extends Component
{
    public $blogs;

    public function mount(){
        $this->blogs = Blog::where('status', 1)->latest()->take(3)->get();
    }

    public function render()
    {
        return view('livewire.index')->extends('layouts.app');
    }
}
