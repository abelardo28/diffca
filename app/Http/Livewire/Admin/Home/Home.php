<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.admin.home.home')->extends('layouts.admin');
    }
}
