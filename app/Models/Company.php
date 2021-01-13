<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostJob;
class Company extends Model
{
    use HasFactory;
    protected $table = "companies";

    function getPostJobs(){
        return $this->hasMany('App\Models\PostJob');
    }

    public function users(){
        return $this->belongsToMany(User::class, "roles");
    }
}
