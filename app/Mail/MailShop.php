<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailShop extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;


    public function __construct($data) {
        $this->data = $data;
    }

    public function build() {
        $name =$this ->data['name'] ;
        $email =$this ->data['email'] ;
        $sms =$this ->data['sms'] ;

        return $this->subject('Subject mail')
                    ->view('mail' , compact('name' , 'email' ,'sms'))
                    ->attach($this ->data['image']->getRealPath(),[
                        'as'=> $this->data['image']->getClientOriginalName()
                    ]);
    }
}
