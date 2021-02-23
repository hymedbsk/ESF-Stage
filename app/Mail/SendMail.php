<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data=[])
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::info("This is mail model");
        return $this->from('testmailesf@gmail.com')->subject('Nouvelle demande de stage')->view('email_stage')->with('data', $this->data)
        ->attach($this->data['cv']->getRealPath(),
        [
            'as' =>$this->data['cv']->getClientOriginalName(),
            'mime' => $this->data['cv']->getClientMimeType(),

        ])
        ->attach($this->data['lm']->getRealPath(),
        [

            'as' =>$this->data['lm']->getClientOriginalName(),
            'mime' => $this->data['lm']->getClientMimeType(),
        ])
        ->attach($this->data['afs']->getRealPath(),
        [
            'as' =>$this->data['afs']->getClientOriginalName(),
            'mime' => $this->data['afs']->getClientMimeType(),
        ]);
        return $this->view('view.name');
    }
}
