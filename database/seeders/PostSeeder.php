<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        
        \App\Models\Post::factory()->count(10)->create();
    }
}
