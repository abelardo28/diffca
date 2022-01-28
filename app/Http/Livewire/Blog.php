<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog as News;

class Blog extends Component
{
    public $blogs;

    public function mount(){
        $this->blogs = News::where('status', 1)->get();
    }

    public function render()
    {
        return view('livewire.blog')->extends('layouts.app');
    }
}
