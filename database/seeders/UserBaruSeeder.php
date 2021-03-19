<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\DB;
use Illuminate\Support\Hash;

class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'admin',
            'name' => 'Administrator',
            'email' => 'rajendra.rakha29@gmail.com',
            'password' => Hash::make('password')
            
        ]);
        //
    }
}
