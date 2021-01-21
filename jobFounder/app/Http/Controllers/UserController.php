<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function jobDiscover()
    {
        return view('jobs_discover');
    }
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
        return view('user_registration');
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
            'email' => 'required|email|unique:users|min:4',
            'first_name' => 'required',
            'password' => 'required|min:6|max:12',
            'confirm_password' => 'required|min:6|max:12',
            'phone_num' => 'required',
            'gender' => 'required'
        ]);
        $user=new User;
        $user->email= $request->input('email');
        $user->first_name= $request->input('first_name');
        $user->last_name= $request->input('last_name');
        $user->password= Hash::make($request->input('password'));
        $user->phone_num= $request->input('phone_num');
        $user->date_of_birth= $request->input('date_of_birth');
        $user->address= $request->input('address');
        $user->gender= $request->input('gender');
        $user->save();
        return redirect()->route('user_profile.show', [$user->id]);

        if($query){
            return back()->with('success','You have been successfully registered');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        if(session()->has('LoggedUser')){
            $user=User::where('id','=',session('LoggedUser'))->first();
        }
        $companies = $user->companies;
        return view('User_dashboard', compact('user','companies'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('user_profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user_profile_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData= $request->validate([
            'email' => 'required|email',
            'first_name' => 'required',
            'password' => 'required|min:6|max:12',
            'confirm_password' => 'required|min:6|max:12',
            'phone_num' => 'required',
            'gender' => 'required'
        ]);
        $user = User::find($id);
        $user->email= $request->input('email');
        $user->first_name= $request->input('first_name');
        $user->last_name= $request->input('last_name');
        $user->password= Hash::make($request->input('password'));
        $user->phone_num= $request->input('phone_num');
        $user->date_of_birth= $request->input('date_of_birth');
        $user->address= $request->input('address');
        $user->gender= $request->input('gender');
        $user->save();
        return redirect()->route('user_profile.show', [$user->id]);
                        // ->with('success','Profile Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    //auth starts
    public function login(){
        return view('index');
    }
    public function check(Request $request){
        
        $validatedData= $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);
        $user=User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('LoggedUser',$user->id);
                return redirect('profile');
            }
            else{
                return back()->with('fail','Incorrect password');
            }
        }
        else{
            return back()->with('fail','No account founded');
        }
    }
    public function profile(){
        if(session()->has('LoggedUser')){
            $user=User::where('id','=',session('LoggedUser'))->first();
           
        }
        return view('user_profile',compact('user'));
    }

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }

    }
    //auth ends
    public function notifications(){
        if(session()->has('LoggedUser')){
            $user=User::where('id','=',session('LoggedUser'))->first();
        }
        $user_notifications= $user->notifications->sortByDesc('id');
        return view('user_notification',compact('user_notifications'));

    }

}
