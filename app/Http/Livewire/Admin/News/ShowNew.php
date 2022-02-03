<?php

namespace App\Http\Livewire\Admin\News;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Utilities\Util;
use App\Models\Blog;
use App\Models\Category;

class ShowNew extends Component
{
    use WithFileUploads;

    protected $listeners = ['mount'];
    public $news, $categories;
    public $blog;
    public $category, $title, $content, $image;

    public function mount(Blog $blog){
        $this->blog = $blog;
        $this->categories = Category::where('status', 1)->get();
    }

    public function render()
    {
        return view('livewire.admin.news.show-new')->extends('layouts.admin');
    }

    public function edit(){
        $this->category = $this->blog->category_id;
        $this->title = $this->blog->title;
        $this->content = $this->blog->content;
        $this->emit('open-modal', 'edit-new');
    }

    public function update(){
        $this->validate([
            'category' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        $this->blog->update([
            'category_id' => $this->category,
            'title' => $this->title,
            'content' => $this->content,
            'image' => ($this->image) ? Util::getUploadFile($this->image, 'blog-images') : $this->blog->image,
            'url' => Util::getDynamicUrl($this->title)
        ]);
        $this->dispatchBrowserEvent('success', ['message' => '¡La noticia se ha actualizado!', 'title' => 'Noticia actualizada', 'modal' => 'edit-new']);
        $this->reset('category','title','content','image');
        $this->emitSelf('mount');
    }
}
