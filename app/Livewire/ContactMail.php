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

            $title = $this->title;
            $body = $this->body;
            $email = $this->email;
            $name = $this->name;

            $data = [
                'name' => $name,
                'title' => $title,
                'email' => $email,
                'body' => $body
            ];

            Mail::to('mohammedfarrag633@gmail.com')->send(new MailContactMail($data));

            $this->dispatch('MailSended');

        } else {
            
            $this->dispatch('NoAuthAlert');
        
        }
    }

    public function render()
    {
        return view('livewire.contact-mail');
    }
}
