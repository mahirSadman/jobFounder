<?php

namespace App\Listeners;

use App\Events\CandidateStatus;
use App\Mail\CandidateStatusMail;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class CandidateStatusListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CandidateStatus  $event
     * @return void
     */
    public function handle(CandidateStatus $event)
    {
        
        $details=[
            'title' => 'Job Founder',
            'body' => 'first mail from job status updated'
        ];
        Mail::to("mahir.sadman@northsouth.edu")->send(new CandidateStatusMail($details));


        $notifi= new Notification;
        $notifi->user_id = $event->appliedJob->user_id;
        $notifi->notification = "testing accept job with applicant id";
        $notifi->save();
        // dd('mail sentddddddddddddd');
    }
}
