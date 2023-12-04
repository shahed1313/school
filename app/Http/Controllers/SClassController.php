<?php

namespace App\Http\Controllers;

use App\Models\SClass;
use App\Models\student;
use Illuminate\Http\Request;

class SClassController extends Controller
{

    // function getclass(Request $request) {

    //    if(=request->school_id)
    //     $result= SClass::query()
    //      ->get(['SClass_id',]);

    //    return response()->json([
    //         $result
    //      ]);
    //     }
    function getclass(Request $request) {
        if ($request->has('school_id')) {
            $school_id = $request->input('school_id');

            $result = SClass::where('school_id', $school_id)
                ->select('SClass_id')
                ->get();

            return response()->json($result);
        } else {
            return response()->json(['error' => 'School not found']);
        }
    }


    // function getStudent(Request $request) {
    //     $result= SClass::query()
    //      ->get(['NStudent',]);

    //    return response()->json([
    //         $result
    //      ]);
    //     }

    function getStudent(Request $request) {
        if ($request->has('class_id')) {
            $class_id = $request->input('class_id');

            $students = student::where('class_id', $class_id)
                ->select('Fname', 'Lname', 'dateOfBirth')
                ->get();

            return response()->json($students);
        } else {
            return response()->json(['error' => ' class not found']);
        }
    }

    public function getStudents() {
        $students = student::with('studentSClass')->get();
        return $students;
    }





    }
