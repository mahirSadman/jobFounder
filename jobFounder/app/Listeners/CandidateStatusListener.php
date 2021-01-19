<?php

namespace App\Listeners;

use App\Events\CandidateStatus;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
        echo "nice";
    }
}
