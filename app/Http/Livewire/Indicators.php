<?php

namespace App\Http\Livewire;

use App\Utilities\Util;
use Livewire\Component;

class Indicators extends Component
{
    public $indicator;

    public function render()
    {
        return view('livewire.indicators')->extends('layouts.app');
    }

    public function getInformation($value){
        $this->indicator = $value;
    }
}
