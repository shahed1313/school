<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    use HasFactory;
    public function typeOfSchool(){

        return $this->belongsTo(typeOfSchool::class);
     }

     public function Nursery(){

        return $this->belongsTo(Nursery::class);
     }

    public function user(){

        return $this->hasMany(User::class);
     }
}
