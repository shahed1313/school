<?php

namespace App\Http\Controllers;

use App\Models\Nursery;
use Illuminate\Http\Request;

class NurseryController extends Controller
{
    function addNursery(Request $request) {

        Nursery::query()->create([
            'Nname'=>$request->Nname,

          ]);
        }

        function getNursery(Request $request) {
            $result= Nursery::query()
             ->get(['Nname']);

           return response()->json([
                $result
             ]);
            }

        function editNursery(Request $request)  {
            Nursery::query()
            ->where('id',$request->id)
            ->update([
                'Nname'=>$request->Nname,

            ]);
        }
        function deleteNursery(Request $request)  {
            Nursery::query()
            ->where('id',$request->id)
            ->delete();
           }

}
