<?php

namespace App\Http\Livewire\Admin\News;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Blog;

class News extends Component
{
    use WithFileUploads;

    public $news;
    public $blog;
    public $title, $content, $image;

    public function mount(){
        $this->news = Blog::where('status', 1)->get();
    }

    public function render()
    {
        return view('livewire.admin.news.news')->extends('layouts.admin');
    }

    public function edit(Blog $blog){
        $this->blog = $blog;
    }
}
