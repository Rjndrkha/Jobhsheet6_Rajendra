<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'image' => 'room1.png'
        ],
        [
            'image' => 'room2.png'
        ],
        [
            'image' => 'room3.png'
        ],
        [
            'image' => 'room4.png'
        ]);
    }
}
