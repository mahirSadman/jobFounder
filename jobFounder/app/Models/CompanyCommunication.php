<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCommunication extends Model
{
    use HasFactory;

    public function sender(){
        return $this->belongsTo(User::class, 'user_id');
      }
}
