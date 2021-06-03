<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'dylan',
            'dob'=>'19/1/1905',
            'email'=>'1@gmail.com',
            'location'=>'nairobi',
            'gender'=>'male',
            'role_id'=>'1',
            'password' => bcrypt('dylan123'),
        ]);

        DB::table('users')->insert([
            'name'=>'dylanleon',
            'dob'=>'19/1/1905',
            'email'=>'2@gmail.com',
            'location'=>'nairobi',
            'role_id'=>'2',
            'gender'=>'male',
            'password' => bcrypt('dylan123'),
        ]);

        DB::table('users')->insert([
            'name'=>'knackdylan',
            'dob'=>'19/1/1905',
            'email'=>'3@gmail.com',
            'location'=>'nairobi',
            'role_id'=>'3',
            'gender'=>'male',
            'password' => bcrypt('dylan123'),
        ]);
    }
}
