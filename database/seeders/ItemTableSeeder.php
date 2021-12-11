<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Item

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b = new Item();
        $b->name = "phone";
        $b->lost_found = "lost";
        //check if true and false need to be in ''
        $b->handed_in = false;
        $b->valuable = true;
        $b->save();
    }
}
