<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Models\Role;
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
        
        if($user){
            $haveRole=Role::where('user_id','=',$user->id)
                     ->where('company_id','=',$request->input('company_id'))
                     ->first();
            if($haveRole){
                return redirect()->route('company_dashboard', [$company->id])->with('fail','Already have a role');
            }
            else{
                $company->users()->attach($user->id, ['role_type' => $request->input('role')]);
                return redirect()->route('company_dashboard', [$company->id]);
            }
        }
        else{
            return redirect()->route('company_dashboard', [$company->id])->with('fail','Wrong Username');
        }
        

        

    }
}
