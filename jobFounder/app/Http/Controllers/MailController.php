<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        $details=[
            'title' => 'Job Founder',
            'body' => 'test mail'
        ];
        Mail::to("kabinhasan99@gmail.com")->send(new CandidateStatusMail($details));
    }
}
