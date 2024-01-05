<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loginadmin')->insert([
            'adminid'=>'101',
            'name'=>'Lilgun',
            'email'=>'Lilgun202@gmail.com',
            'password'=>Hash::make('Lilgun303'),
        ]);
    }
}
