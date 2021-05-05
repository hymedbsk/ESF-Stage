<?php

namespace App\Http\Controllers;

use Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MembreController extends Controller
{
    public function professionnelGet(){

        return view('membre.professionnel');

    }

    public function particulierGet(){

        return view('membre.particulier');
    }


    public function professionnelPost(Request $request){

    }

    public function particulierPost(Request $request){


        $data = array(
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'ddn' => $request->ddn,
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'pays' => $request->pays,
            'email' => $request->email,
            'tel' => $request->tel,
            'interet' => $request->interet,
            'message' => $request->message

        );

        Mail::send('email_membre', $data, function($message){

            $message->to('hymedboussaklatan@gmail.com')->subject('Prise de contact');
        });

        return view('confirm');



    }


    public function postForm(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'ddn' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'interet[]' => 'required',
            'message' => 'required',

        ]);

        $data = array(
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'ddn' => $request->ddn,
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'pays' => $request->pays,
            'email' => $request->email,
            'tel' => $request->tel,
            'interet[]' => $request->interet,
            'message' => $request->message

        );
        Mail::send('email_membre', $data, function($message){

            $message->to('hymedboussaklatan@gmail.com')->subject('Prise de contact');
        });

        return view('confirm');

    }
}
