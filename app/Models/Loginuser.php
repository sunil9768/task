<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loginuser extends Model
{
    use HasFactory;
    function UserDetails()
    { return $this->hasMany('App\Models\Addressuser','loginuser_id','id');
     }
}
