<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentSClassController extends Controller
{
    // function addStudent(Request $request) {

    //    // $requestedClass = $request->;بدي روح ع جدول الstudent class
    //     student::query()->create([
    //         'Fname'=>$request->Fname,
    //         'Lname'=>$request->Lname,
    //         'dateOfBirth'=>$request->dateOfBirth,
    //       ]);

    //     }
    function addStudent(Request $request) {
        $classId = $request->SClass_id;
        $student = new Student;
        $student->Fname = $request->Fname;
        $student->Lname = $request->Lname;
        $student->dateOfBirth = $request->dateOfBirth;

        $student->SClass_id = $classId;
        $student->save();
    }
////////////////////////////////////////////////////////////////////////////////////////////



}
