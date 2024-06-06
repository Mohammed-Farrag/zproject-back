<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $req){
        $title = $req->title;
        $body = $req->body;

        Mail::to('mohammedfarrag633@gmail.com')->send(new ContactMail($title, $body));

        return response()->json(['success' =>true, 'message' => 'mail sended successfully']);
    }
}
