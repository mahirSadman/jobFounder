<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
    public function create()
    {
        return view('company_create');
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
            'company_name' => 'required',
            'license_num' => 'required|unique:companies|min:4',
            'email' => 'required|email|unique:companies|min:4',
            'contact' => 'required',
            'location' => 'required',
            'industry_type' => 'required'
        ]);
        $company=new Company;
        $company->company_name= $request->input('company_name');
        $company->license_num= $request->input('license_num');
        $company->email= $request->input('email');
        $company->contact= $request->input('contact');
        $company->location= $request->input('location');
        $company->industry_type= $request->input('industry_type');
        $company->description= $request->input('description');
        $company->web_link= $request->input('web_link');
        $company->image= $request->input('image');
        $company->employee_num= $request->input('employee_num');
        $company->save();

        if(session()->has('LoggedUser')){
            $user=User::where('id','=',session('LoggedUser'))->first();
        }

        $company->users()->attach($user->id, ['role_type' => 'Owner']);
        return redirect()->route('company_dashboard', [$company->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function dashboard($id)
    {
        if(session()->has('LoggedUser')){
            $user=User::where('id','=',session('LoggedUser'))->first();
        }
        $company = Company::find($id);
        $my_role= Role::where ('user_id', $user->id)
                    ->where ('company_id', $company->id)
                    ->select('role_type')
                    ->first();
        $role_users = $company->users;
        if($my_role->role_type == 'Owner'){
            return view('company_dashboard_owner', compact('company', 'role_users'));
        }
        elseif($my_role->role_type == 'Recruiter'){
            return view('company_dashboard_recruiter', compact('company', 'role_users'));
        }
        elseif($my_role->role_type == 'Recieptionist'){
            return view('company_dashboard_recieptionist', compact('company', 'role_users'));
        }
        else{
            return 'You dont have any role in this company';
        }

        
    }

    public function show($id)
    {
        $company = Company::find($id);
        return view('company_profile', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('company_profile_edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $company = Company::find($id);
        $company->company_name= $request->input('company_name');
        $company->license_num= $request->input('license_num');
        $company->email= $request->input('email');
        $company->contact= $request->input('contact');
        $company->location= $request->input('location');
        $company->industry_type= $request->input('industry_type');
        $company->description= $request->input('description');
        $company->web_link= $request->input('web_link');
        $company->image= $request->input('image');
        $company->employee_num= $request->input('employee_num');
        $company->save();
        return redirect()->route('company_dashboard', [$company->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

    public function allCompanies()
    {
        if(session()->has('LoggedUser')){
            $user=User::where('id','=',session('LoggedUser'))->first();
        }
        $companies = $user->companies;
        return view('company_my', compact('companies'));
    }
}
