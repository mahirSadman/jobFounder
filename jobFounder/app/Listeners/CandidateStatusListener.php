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
        $notification = "Check your Applied job section.";
        if($event->appliedJob->accepted == 'accepted'){
            $details=[
            'title' => 'Job Founder',
            'body' => 'first mail from job status updated'
            ];
            Mail::to("mahir.sadman@northsouth.edu")
            ->send(new CandidateStatusMail($details));
            $notification = "Congratulations. Your propsal has been accepted.";
        }
        elseif($event->appliedJob->accepted == 'waiting'){
            $notification = "Your propsal is in waiting list.";
        }
        elseif($event->appliedJob->accepted == 'rejected'){
            $notification = "Sorry, Your propsal has been rejected.";
        }
        else{
            $notification = "Check your Applied Job section.";
        }
        
        $notifi= new Notification;
        $notifi->user_id = $event->appliedJob->user_id;
        $notifi->notification = $notification;
        $notifi->save();
        // dd('mail sentddddddddddddd');
    }
}
