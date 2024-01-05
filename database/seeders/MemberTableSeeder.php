<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loginmember')->insert([
            'memberid'=>'202',
            'name'=>'Deusvault',
            'email'=>'Deusvault203@gmail.com',
            'password'=>Hash::make('Deusvault204'),
        ]);
    }
}
