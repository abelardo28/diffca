<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name, $emai, $subject, $message;

    public function render()
    {
        return view('livewire.contact')->extends('layouts.app');
    }

    public function send(){

    }
}
