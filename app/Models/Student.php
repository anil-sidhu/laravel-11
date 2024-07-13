<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    function getNameAttribute($val){
        return ucfirst($val);
    }

    function getPhoneAttribute($val){
        return "+91-".$val;
    }
}
