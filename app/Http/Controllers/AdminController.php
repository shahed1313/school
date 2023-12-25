<?php

namespace App\Http\Controllers;

use App\Models\school;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    // function admin(Request $request)
    // {
    //     if ($request->has('password')) {
    //         $password = $request->input('password');

    //         $result = User::where('password', $password)
    //             ->delete();
    //     } else {
    //         return response()->json(['error' => 'you can not delete it ']);
    //     }
    // }

    function admin(Request $request)
{
    if ($request->has('password')) {
        $password = $request->input('password');

        $admin = User::where('username', 'admin')->first();

        if ($admin && Hash::check($password, $admin->password)) {
            $admin->delete();
            return response()->json(['success' => 'Admin deleted successfully']);
        } else {
            return response()->json(['error' => 'Invalid password']);
        }
    } else {
        return response()->json(['error' => 'Password is required']);
    }
}


}
