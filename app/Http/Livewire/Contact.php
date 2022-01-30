<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;
use Livewire\Component;

class Contact extends Component
{
    public $name, $email, $phone, $message;

    public function render()
    {
        return view('livewire.contact')->extends('layouts.app');
    }

    public function send(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        // if ($this->validateRecaptcha($this->request)) {
            Mail::to('abelardo-ca@hotmail.com')->send(new sendMail($this));
            $this->dispatchBrowserEvent('success', ['message' => '¡Gracias por tu mensaje, nos pondremos en contacto contigo lo más pronto posible!', 'title' => 'Mensaje enviado']);
            $this->reset('name','email','phone','message');
        // }
        // $this->dispatchBrowserEvent('error', ['message' => '¡Debe seleccionar la opción del captcha!', 'title' => 'Error al enviar mensaje']);
    }
    
    public static function validateRecaptcha($request){
        $captcha_response = true;
        $recaptcha = $request["g-recaptcha-response"];
        
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => '6LceT_0cAAAAAE3VoDUQwAEuT1gVplVBH2GOKcge',
            'response' => $recaptcha
        ];
        $query = http_build_query($data);
        $options = [
            'http' => [
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                            "Content-Length: ".strlen($query)."\r\n".
                            "User-Agent:MyAgent/1.0\r\n",
                'method'  => "POST",
                'content' => $query,
            ],
        ];
        $context = stream_context_create($options);
        $verify = file_get_contents($url, false, $context);
        
        $captcha_success = json_decode($verify);
        $captcha_response = $captcha_success->success;
     
        if ($captcha_response) {
            return true;
        } else {
            return false;
        }
    }
}
