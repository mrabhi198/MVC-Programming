<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;     //for string components

class seedDB extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            "name"=>Str::random(10),
            "phone"=>Str::random(10),
            "address"=>Str::random(10),
            "course"=>Str::random(10),
        ]);
    }
}
