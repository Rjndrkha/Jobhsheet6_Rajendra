<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Belajar Model Dengan Laravel',
            'slug' => ' belajar-model-dengan-laravel',
            'content' => 'Belajar Laravel itu menyenangkan',
            'draft' => 0
        ]);
        //
    }
    DB::table('posts')->insert([
        'title' => 'Belajar Model Dengan Laravel2',
        'slug' => ' belajar-model-dengan-laravel2',
        'content' => 'Belajar Laravel itu menyenangkan',
        'draft' => 0
    ]);
    //
}
}

public function definition()
 {
 $title = $this->faker->sentence;
 $slug = str_slug($title);
 return [
 'title' => $title,
 'slug' => $slug,
 
 'content' => $this->faker->realText(),
 'draft' => random_int(0, 1),
 ];
 }
}