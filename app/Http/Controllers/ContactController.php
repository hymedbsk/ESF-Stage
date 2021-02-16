<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function postForm(ContactRequest $request){
        $data = array(
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'texte' => $request->texte
        );
        Mail::send('email_contact', $data, function($message){

            $message->to('testmailesf@gmail.com')->subject('Prise de contact');
        });

        return view('confirm');

    }
}
