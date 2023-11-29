<?php

namespace App\Http\Controllers;

use App\Models\school;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function addSchool(Request $request) {

        school::query()->create([
            'Sname'=>$request->Sname,
            'Dname'=>$request->Dname,
            'location'=>$request->location,
            'typeOfSchool_id'=>$request->typeOfSchool_id,
            'nursery_id'=>$request->nursery_id,
          ]);

        }

        function getSchool(Request $request) {
            $result= school::query()
             ->get(['Sname','Dname','location','typeOfSchool_id','nursery_id']);

           return response()->json([
                $result
             ]);
            }

        function editSchool(Request $request)  {
            school::query()
            ->where('id',$request->id)
            ->update([
                'Sname'=>$request->Sname,
                'Dname'=>$request->Dname,
                'location'=>$request->location,
                'typeOfSchool_id'=>$request->typeOfSchool_id,
                'nursery_id'=>$request->nursery_id,
            ]);
        }
        function deleteSchool(Request $request)  {
            school::query()
            ->where('id',$request->id)
            ->delete();
           }

}
