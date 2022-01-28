<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class BlogDetail extends Component
{
    public $blog;

    public function mount($url){
        $this->blog = Blog::where('url', $url)->first();
    }

    public function render()
    {
        return view('livewire.blog-detail')->extends('layouts.app');
    }
}
