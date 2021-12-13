<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Place();
        $a->rough_area = "Swansea beach";
        $a->specific_area = "war memorial";
        $a->save();

        $b = new Place();
        $b->rough_area = "Town centre";
        $b->specific_area = "wind street";
        $b->save();

        //$places = Place::factory()->count(8)->create();
    }
}
