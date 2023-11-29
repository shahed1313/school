<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolSClass extends Model
{
    use HasFactory;

    public function StudentSClass(){

        return $this->hasMany(StudentSClass::class);
     }

     public function school(){

        return $this->belongsTo(school::class);
     }

     public function SClass(){

        return $this->belongsTo(SClass::class);
     }

     public function user(){

        return $this->belongsTo(User::class);
     }
}
