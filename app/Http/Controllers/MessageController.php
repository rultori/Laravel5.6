<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' =>'required',
            'content' => 'required|min:3'
        ], [
            'name.required' => __('I need yur name'),
            'email.required' => 'Escribe un correo electronico validoo',
        ]);

        Mail::to('rultori@ymail.com')->queue(new MessageReceived($message));

        // return new MessageReceived($message);

        return 'Mensaje enviado';
    }
}
