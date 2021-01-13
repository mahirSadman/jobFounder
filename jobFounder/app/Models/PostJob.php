<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class PostJob extends Model
{
    use HasFactory;
    
    public function applicants(){
        return $this->belongsToMany(User::class, "applied_jobs");
    }
}
