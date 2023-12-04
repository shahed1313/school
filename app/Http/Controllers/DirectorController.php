<?php

namespace App\Http\Controllers;

use App\Models\SchoolSClass;
use App\Models\SClass;
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


            function editClass(Request $request)  {
                SClass::query()
                ->where('id',$request->id)
                ->update([
                    'name'=>$request->name,

                ]);
            }
            function deleteClass(Request $request)  {
                SClass::query()
                ->where('id',$request->id)
                ->delete();
               }

               function editStudent(Request $request)  {
                student::query()
                ->where('id',$request->id)
                ->update([
                    'Fname'=>$request->Fname,

                ]);
            }
            function deletestudent(Request $request)  {
                student::query()
                ->where('id',$request->id)
                ->delete();
               }




}
