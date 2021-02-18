<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\StageRequest;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Log;

class StageController extends Controller
{
    function Postform(StageRequest $request){


        $data = array(
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'poste' => $request->poste,
            'cv' => $request->cv,
            'lm' => $request->lm,
            'afs' => $request->afs

        );

        Log::info("data");
        Log::info($data);
        Mail::to('testmailesf@gmail.com')->send(new SendMail($data));
        return view('confirm_stage');
    }
}
