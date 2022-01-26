<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class Login extends Component
{
    public $email, $password;

    public function render(){
        return view('livewire.auth.login');
    }

    public function login(){
        $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            return redirect(route('home'));
        }
        $this->dispatchBrowserEvent('error', ['message' => '¡El usuario o la contraseña son incorrectos!', 'title' => 'Datos incorrectos']);
    }
}