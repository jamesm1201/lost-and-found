<?php

namespace Database\Factories;
use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceFactory extends Factory
{
    protected $model = Place::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rough_area' =>$this->faker->randomElement(['beach', 'town centre', 'uplands', 'bay campus', 'singleton campus']),
            //'specific_area'=>$this->faker->Address->streetName(),
        ];
    }
}
