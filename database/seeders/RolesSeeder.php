<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nurseries')->insert
        (

[
    [
        'name'=>'Admin'
    ],
    [
        'name'=>'student'
    ],
    [
        'name'=>'teacher'
    ],
    [
        'name'=>'director'
    ],

]);
    }
    }
