<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nurseriesSeeder extends Seeder
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
        'name'=>'KJ1'
    ],
    [
        'name'=>'KJ2'
    ],
    [
        'name'=>'KJ3'
    ],]);
    }
    }
