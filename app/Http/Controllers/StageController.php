<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\StageRequest;

class StageController extends Controller
{
    function Postform(StageRequest $request){
        $data = array(
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'texte' => $request->texte,
            'cv' => $request->file('cv'),
            'lm' => $request->file('lm'),
            'afs' => $request->file('fts')

        );

        Mail::send('email_stage', $data, function($message){

            $message->to('testmailesf@gmail.com')->subject('Prise de contact');
            $message->attach($message['cv']);
        });

        return view('confirm');
    }
}
