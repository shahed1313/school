<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class typeOfSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('typeOfSchool')->insert
        (

[
    [
        'name'=>'elementary school'
    ],
    [
        'name'=>'preparatory school'
    ],
    [
        'name'=>'high school'
    ],]);
    }
    }
