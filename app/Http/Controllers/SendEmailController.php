<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SendEmailController extends Controller
{
    function send (Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'mobile' => 'required',
            'document' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'mobile' => $request->mobile,
            'document' => $request->document,
            'user_email' => $request->document,
            'job_title' => $request->job_title
        );

        Log::info("data");
        Log::info($data);
        Mail::to('testmailesf@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us ! ');
    }
}
