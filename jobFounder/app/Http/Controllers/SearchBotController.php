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
        if(session()->has('LoggedUser')){
            $user=User::where('id','=',session('LoggedUser'))->first();
        }
        $postJob->candidates()->attach($user->id);    
        return redirect()->route('jobs.applied');
    }

    public function jobsApplied(){
        if(session()->has('LoggedUser')){
            $user=User::where('id','=',session('LoggedUser'))->first();
        }
        $user = User::find($user->id);
        $applied_jobs = $user->appliedJobs;
        
        return view('jobs_applied', compact('applied_jobs'));
    }


}
