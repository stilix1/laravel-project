<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectsSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->insert([
            [
                'title' => 'Sony Music',
                'description' => 'Sony Music',
                'author' => 'root',
                'visible' => true,
                'categories' => json_encode(['Сайты', 'E-commerce']),
                'logo' => 'images/sony/sony_music.jpg',
                'created_at' => now(),
                'slug' => 'sony_music',
                'updated_at' => now(),
            ],
            [
                'title' => 'I love school',
                'description' => 'I love school',
                'author' => 'root',
                'visible' => true,
                'categories' => json_encode(['Сайты', 'Образование']),
                'logo' => 'images/Ilove_school/Ilove_school_logo.webp',
                'slug' => 'i_love_school',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Karma',
                'description' => 'Karma',
                'author' => 'root',
                'visible' => true,
                'categories' => json_encode(['Финтех', 'Торговые площадки']),
                'logo' => 'images/Ilove_school/Ilove_school_logo.webp',
                'slug' => 'karma',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
