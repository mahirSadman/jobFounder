<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = "roles";

    // public function getCompanies($id){
    //     $user = User::find($id);
    //     $companies = $user->companies;
    //     return $companies;
    // }

    // public function getUsers($id){
    //     $company = Company::find($id);
    //     $users = $company->users;
    //     return $users;
    // }

}
