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

    function  setNameAttribute($val){
        return $this->attributes['name']=ucfirst($val);
    }

    function  setPhoneAttribute($val){
        return $this->attributes['phone']="+91-".$val;
    }
}
