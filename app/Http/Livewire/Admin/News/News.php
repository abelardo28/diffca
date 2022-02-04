<?php

namespace App\Http\Livewire\Admin\News;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Utilities\Util;
use App\Models\Blog;
use App\Models\Category;

class News extends Component
{
    use WithFileUploads;

    protected $listeners = ['mount'];
    public $news, $categories;
    public $category, $title, $content, $image;

    public function mount(){
        $this->news = Blog::where('status', 1)->latest()->get();
        $this->categories = Category::where('status', 1)->get();
    }

    public function render()
    {
        return view('livewire.admin.news.news')->extends('layouts.admin');
    }

    public function create(){
        $this->emit('open-modal', 'new-new');
    }

    public function store(){
        $this->validate([
            'category' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        Blog::create([
            'category_id' => $this->category,
            'title' => $this->title,
            'content' => $this->content,
            'image' => ($this->image) ? Util::getUploadFile($this->image, 'blog-images') : NULL,
            'url' => Util::getDynamicUrl($this->title),
            'created_by' => auth()->user()->id
        ]);
        $this->dispatchBrowserEvent('success', ['message' => '¡La noticia se ha registrado!', 'title' => 'Noticia registrada', 'modal' => 'new-new']);
        $this->reset('category','title','content','image');
        $this->emitSelf('mount');
    }

    public function delete(Blog $blog){
        $blog->update([
            'status' => 0
        ]);
        $this->dispatchBrowserEvent('error', ['message' => '¡La noticia se ha eliminado!', 'title' => 'Noticia eliminada']);
        $this->emitSelf('mount');
    }
}
