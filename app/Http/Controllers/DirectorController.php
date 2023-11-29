<?php

namespace App\Http\Controllers;

use App\Models\SchoolSClass;
use App\Models\student;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    function addClass(Request $request) {

        SchoolSClass::query()->create([
            'SClass_id'=>$request->SClass_id,
            'school_id'=>$request->school_id,
            'user_id'=>$request->user_id,

          ]);

        }
        function addstudent(Request $request) {

            student::query()->create([
                'Fname'=>$request->Fname,
                'Lname'=>$request->Lname,
                'dateOfBirth'=>$request->dateOfBirth,

              ]);

            }

}
