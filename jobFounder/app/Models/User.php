<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = [
        'title', 'description'
      ];

      public function companies(){
        return $this->belongsToMany(Company::class, "roles")
        ->withPivot(['role_type']);
      }

      public function appliedJobs(){
        return $this->belongsToMany(PostJob::class, "applied_jobs")
        ->withPivot(['accepted']);
      }
}
