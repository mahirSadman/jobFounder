<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        //  dd('mail sent');
        $details=[
            'title' => 'Job Founder',
            'body' => 'test mail'
        ];
        Mail::to("mahirpunna@gmail.com")->send(new CandidateStatusMail($details));
       
    }
}
