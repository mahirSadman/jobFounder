<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PostJob;
use Illuminate\Http\Request;

class SearchBotController extends Controller
{
    public function search(Request $request){
        $jobs = PostJob::where('job_category', $request->job_category)
               ->where('job_type', $request->job_type)
               ->get();
               return view('jobs_search_results', compact('jobs'));

    }

    public function applyJob($id){
        $postJob= PostJob::find($id);
        $user_id=1;
        $postJob->applicants()->attach($user_id);    
        return redirect()->route('jobs.applied');
    }

    public function jobsApplied(){
        $id= 1;
        $user = User::find($id);
        $applied_jobs = $user->appliedJobs;
        
        return view('jobs_applied', compact('applied_jobs'));
    }


}
