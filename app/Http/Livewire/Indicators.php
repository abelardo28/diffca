<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Indicators extends Component
{
    public function render()
    {
        return view('livewire.indicators')->extends('layouts.app');
    }
}
