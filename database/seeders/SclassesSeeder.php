<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SclassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            DB::table('s_classes')->insert
            (

    [
        [
            'name'=>'first class',
            'NStudent'=>null
        ],
        [
            'name'=>'second class',
            'NStudent'=>null
        ],
        [
            'name'=>'third class',
            'NStudent'=>null
        ],
        [
            'name'=>'fourth class',
            'NStudent'=>null
        ],
        [
            'name'=>'fifth class',
            'NStudent'=>null
        ],
        [
            'name'=>'sixth class',
            'NStudent'=>null
        ],
        [
            'name'=>'seventh class',
            'NStudent'=>null
        ],
        [
            'name'=>'eighth class',
            'NStudent'=>null
        ],
        [
            'name'=>'tenth class',
            'NStudent'=>null
        ],
        [
            'name'=>'11 class',
            'NStudent'=>null
        ],
        [
            'name'=>'12 class',
            'NStudent'=>null
        ],


            ]);
        }
    }
