<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Indicator;

class Index extends Component
{
    public $blogs, $values;

    public function mount(){
        $this->blogs = Blog::where('status', 1)->latest()->take(3)->get();
        $this->values = Indicator::where('status', 1)->get();
    }

    public function render()
    {
        return view('livewire.index')->extends('layouts.app');
    }
}
