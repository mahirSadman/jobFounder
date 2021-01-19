<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\CandidateStatus;



class AppliedJob extends Model
{
    use HasFactory;
    protected $table = "applied_jobs";

    //event starts
    protected $dispatchesEvents =[
        'saved' => CandidateStatus::class,
    ];

    //event ends


}

