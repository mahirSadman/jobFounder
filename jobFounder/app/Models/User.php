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

      public function notifications()
      {
        return $this->hasMany(Notification::class);
      }
      
      public function communications()
      {
        return $this->hasMany(Communication::class);
      }

      public function companies(){
        return $this->belongsToMany(Company::class, "roles")
        ->withPivot(['role_type']);
      }

      public function appliedJobs(){
        return $this->belongsToMany(PostJob::class, "applied_jobs")
        ->withPivot(['accepted']);
      }
      
      public function acceptedJobs(){
        return $this->belongsToMany(PostJob::class, "applied_jobs")
        ->wherePivot('accepted','=', 'accepted')
        ->withPivot(['accepted']);
      }
      
      public function waitedJobs(){
        return $this->belongsToMany(PostJob::class, "applied_jobs")
        ->wherePivot('accepted','=', 'waiting')
        ->withPivot(['accepted']);
      }

      public function rejectedJobs(){
        return $this->belongsToMany(PostJob::class, "applied_jobs")
        ->wherePivot('accepted','=', 'rejected')
        ->withPivot(['reject_reason']);
      }
      
      public function pinnedJobs(){
        return $this->belongsToMany(PostJob::class, "pinned_jobs");
      }     

}
