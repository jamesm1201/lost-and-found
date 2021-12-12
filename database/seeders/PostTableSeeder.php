<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Post();
        $a->name = "John Doe";
        $a->email = "jdoe@icloud.com";
        $a->contact_number = "07234743118";
        //check if dateTime needs ''
        $a->date_found_lost = '11/11/2021';
        $a->content = "Found this (item.name) at (place.rougharea) contact me if its yours! ";
        //hard coded
       // $a->place_id = 1;
       // $a->item_id = 1;
        $a->save();

        $posts = Post::factory()->count(10)->create();
    }
}
