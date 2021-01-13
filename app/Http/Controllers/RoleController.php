<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;

class RoleController extends Controller
{
    public function add(Request $request)
    {
        $validatedData= $request->validate([
            'user_name' => 'required',
            'role' => 'required',
            'company_id' => 'required'
        ]);
        $company= Company::find($request->input('company_id'));    
        $user= User::where('email',$request->input('user_name'))->first();
        
        $company->users()->attach($user->id, ['role_type' => $request->input('role')]);
        return redirect()->route('company_dashboard', [$company->id]);
    }
}
