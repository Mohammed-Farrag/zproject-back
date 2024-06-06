<?php

namespace App\Livewire;

use App\Mail\ContactMail as MailContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactMail extends Component
{


    public $title;
    public $body;
    public $name;
    public $email;

    public function send()
    {
        if (Auth::check()) {

           

            Mail::to('memothetop633@gmail.com')->send(new MailContactMail($this->name, $this->email, $this->title, $this->body));

            $this->dispatch('MailSended');

            $this->name = "";
            $this->email = "";
            $this->title = "";
            $this->body = "";

        } else {
            
            $this->dispatch('NoAuthAlert');
        
        }
    }

    public function render()
    {
        return view('livewire.contact-mail');
    }
}
