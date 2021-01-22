<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class PostJob extends Model
{
    use HasFactory;
    
    public function candidates(){
        return $this->belongsToMany(User::class, "applied_jobs")
        ->withPivot(['id', 'accepted']);
    }

    public function company(){
        return $this->belongsTo(Company::class, 'company_id');
      }
}
