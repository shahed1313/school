<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SClass extends Model
{
    use HasFactory;
    public function SchoolSClass(){

        return $this->hasMany(SchoolSClass::class);
     }

}
