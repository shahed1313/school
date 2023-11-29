<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSClass extends Model
{
    use HasFactory;
    public function SchoolSClass(){

        return $this->belongsTo(SchoolSClass::class);
     }

     public function student(){

        return $this->belongsTo(student::class);
     }

}
