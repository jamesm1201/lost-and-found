<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Comment();
        $a->name = "Jane Wotsit";
        $a->contact_number = "0767544531";
        $a->email = "jwots@icloud.com";
        $a->content = "This is mine, call me!";
        //hard coded post id
        $a->post_id = 1;
        $a->save();

        $comments = Comment::factory()->count(10)->create();
    }
}
