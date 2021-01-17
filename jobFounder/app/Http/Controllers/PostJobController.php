<?php

namespace App\Http\Controllers;
use App\Models\AppliedJob;
use App\Models\Company;
use App\Models\PostJob;
use Illuminate\Http\Request;

class PostJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $company= Company::find($id);
        return view('post_job_create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'job_title' => 'required',
            'vacancy' => 'required',
            'deadline_date' => 'required',
            'job_type' => 'required',
            'job_category' => 'required'
        ]);
        $postJob=new PostJob;
        $postJob->company_id=$request->input('company_id');
        $postJob->job_title= $request->input('job_title');
        $postJob->description= $request->input('description');
        $postJob->vacancy= $request->input('vacancy');
        $postJob->skills= $request->input('skills');
        $postJob->deadline_date= $request->input('deadline_date');
        $postJob->job_type= $request->input('job_type');
        $postJob->job_category= $request->input('job_category');
        $postJob->application_way= $request->input('application_way');
        $postJob->job_responsibilities= $request->input('job_responsibilities');
        $postJob->display_salary= $request->input('display_salary');
        $postJob->negotiate= $request->input('negotiate');
        $postJob->save();
        return redirect()->route('post_job_view.show', [$postJob->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostJob  $postJob
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postJob= PostJob::find($id);
        return view('post_job_view', compact('postJob'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostJob  $postJob
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postJob= PostJob::find($id);
        return view('post_job_edit', compact('postJob'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostJob  $postJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData= $request->validate([
            'job_title' => 'required',
            'vacancy' => 'required',
            'deadline_date' => 'required',
            'job_type' => 'required',
            'job_category' => 'required'
        ]);
        $postJob= PostJob::find($id);
        $postJob->job_title= $request->input('job_title');
        $postJob->description= $request->input('description');
        $postJob->vacancy= $request->input('vacancy');
        $postJob->skills= $request->input('skills');
        $postJob->deadline_date= $request->input('deadline_date');
        $postJob->job_type= $request->input('job_type');
        $postJob->job_category= $request->input('job_category');
        $postJob->application_way= $request->input('application_way');
        $postJob->job_responsibilities= $request->input('job_responsibilities');
        $postJob->display_salary= $request->input('display_salary');
        $postJob->negotiate= $request->input('negotiate');
        $postJob->save();
        return redirect()->route('post_job_view.show', [$postJob->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostJob  $postJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostJob $postJob)
    {
        //
    }

    public function candidate_accept(Request $request)
    {
        $validatedData= $request->validate([
            'candidate_job_id' => 'required'
        ]);
        $candidate_job= AppliedJob::find($request->candidate_job_id);
        
        $candidate_job->accepted = "accepted";
        $candidate_job->save();
        return redirect()->route('post_job_view.show', [$candidate_job->post_job_id]);
    }
}
