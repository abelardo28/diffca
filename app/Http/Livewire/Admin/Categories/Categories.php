<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    protected $listeners = ['mount'];
    public $categories;
    public $category, $user;
    public $name, $description;

    public function mount(){
        $this->categories = Category::where('status', 1)->get();
    }

    public function render()
    {
        return view('livewire.admin.categories.categories')->extends('layouts.admin');
    }

    public function store(){
        Category::create([
            'name' => $this->name,
            'description' => $this->description
        ]);
        $this->dispatchBrowserEvent('success', ['message' => '¡La categoria se ha registrado!', 'title' => 'Categoria registrada', 'modal' => 'new-category']);
        $this->reset('name','category');
        $this->emitSelf('mount');
    }

    public function edit(Category $category){
        $this->category = $category;
        $this->name = $category->name;
        $this->description = $category->description;
        $this->emit('open-modal', 'edit-category');
    }

    public function update(){
        $this->category->update([
            'name' => $this->name,
            'description' => $this->description
        ]);
        $this->dispatchBrowserEvent('success', ['message' => '¡La categoria se ha actualizado!', 'title' => 'Categoria actualizada', 'modal' => 'edit-category']);
        $this->reset('category');
        $this->emitSelf('mount');
    }

    public function delete(Category $category){
        $category->update([
            'status' => 0
        ]);
        $this->dispatchBrowserEvent('error', ['message' => '¡La categoria se ha eliminado!', 'title' => 'Categoria eliminada']);
        $this->emitSelf('mount');
    }
}
