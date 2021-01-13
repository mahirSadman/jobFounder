<?php

namespace App\Http\Controllers;

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
}
