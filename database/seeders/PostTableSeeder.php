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
        $a->date_found_lost = '2021/11/10';
        $a->content = "Found this (item.name) at (place.rougharea) contact me if its yours! ";
        $a->place_id = 2;
        $a->item_id = 2;
        $a->save();
       

        $b = new Post();
        $b->name = "James";
        $b->email = "jmorley@icloud.com";
        $b->contact_number = "07677755518";
        //check if dateTime needs ''
        $b->date_found_lost = '2021/11/10';
        $b->content = "Found this (item.name) at (place.rougharea) contact me if its yours! ";
        //hard coded
        $b->place_id = 1;
        $b->item_id = 1;
        $b->save();

        $posts = Post::factory()->count(8)->create();
    }
}
