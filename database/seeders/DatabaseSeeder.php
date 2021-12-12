<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Post::factory(3)
        //     ->has(\App\Models\Comment::factory()->count(3))
        //     ->create();

        $this->call([
            PlaceTableSeeder::class,
            ItemTableSeeder::class,
            PostTableSeeder::class,
            CommentTableSeeder::class,
        ]);
    }
}
