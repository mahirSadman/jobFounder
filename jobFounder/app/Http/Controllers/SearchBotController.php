<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PostJob;
use App\Models\AppliedJob;
use App\Models\PinnedJob;
use Illuminate\Http\Request;

class SearchBotController extends Controller
{
    public function search(Request $request){
        $jobs = PostJob::where('job_category', $request->job_category)
               ->where('job_type', $request->job_type)
               ->get();
               return view('jobs_search_results', compact('jobs'));

    }

    public function jobsApplied(){
        if(session()->has('LoggedUser')){
            $user=User::where('id','=',session('LoggedUser'))->first();
        }
        $user = User::find($user->id);
        $applied_jobs = $user->appliedJobs;
        $num_accepted_jobs = $user->acceptedJobs->count();
        $waited_jobs = $user->waitedJobs;
        $rejected_jobs = $user->rejectedJobs;
        return view('jobs_applied', compact('applied_jobs', 'num_accepted_jobs', 'waited_jobs','rejected_jobs'));
    }
    
    public function applyJob($id){
        if(session()->has('LoggedUser')){
            $user=User::where('id','=',session('LoggedUser'))->first();
        }
        $applied=AppliedJob::where('user_id','=',$user->id)
                     ->where('post_job_id','=',$id)
                     ->first();

        if($applied){
            return redirect()->route('jobs.applied')->with('fail','Already applied');
        }
        else{
            $postJob= PostJob::find($id);
        
            $postJob->candidates()->attach($user->id);  
            return redirect()->route('jobs.applied');
        }

    }
    public function jobsPinned(){
        if(session()->has('LoggedUser')){
            $user=User::where('id','=',session('LoggedUser'))->first();
        }
        $user = User::find($user->id);
        $pinned_jobs = $user->pinnedJobs;
        $num_pinned_jobs = $user->pinnedJobs->count();
        return view('jobs_pinned', compact('pinned_jobs', 'num_pinned_jobs'));
    }

    public function pinJob($id){
        if(session()->has('LoggedUser')){
            $user=User::where('id','=',session('LoggedUser'))->first();
        }
        $pinned=PinnedJob::where('user_id','=',$user->id)
                     ->where('post_job_id','=',$id)
                     ->first();

        if($pinned){
            return redirect()->route('jobs.pinned')->with('fail','Already pinned');
        }
        else{
            $pinnedJob= new PinnedJob;
            $pinnedJob->user_id= $user->id;
            $pinnedJob->post_job_id= $id;
            $pinnedJob->save();
            return redirect()->route('jobs.pinned');
        }

    }

    


}
