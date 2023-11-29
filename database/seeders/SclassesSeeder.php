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

            DB::table('Sclasses')->insert
            (

    [
        [
            'name'=>'first class'
        ],
        [
            'name'=>'second class'
        ],
        [
            'name'=>'third class'
        ],
        [
            'name'=>'fourth class'
        ],
        [
            'name'=>'fifth class'
        ],
        [
            'name'=>'sixth class'
        ],
        [
            'name'=>'seventh class'
        ],
        [
            'name'=>'eighth class'
        ],
        [
            'name'=>'tenth class'
        ],
        [
            'name'=>'11 class'
        ],
        [
            'name'=>'12 class'
        ],
            ]);
        }
    }
