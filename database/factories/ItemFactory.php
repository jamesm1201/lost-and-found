<?php

namespace Database\Factories;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    protected $model = Item::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->randomElement(['phone', 'wallet', 'keys', 'bag', 'toy']),
            'lost_found'=>$this->faker->randomElement(['lost', 'found']),
            //'handed_in'=>$this->faker->randomElement(['true', 'false']),
            //'valuable'=>$this->faker->randomElement(['true', 'false']),
        ];
    }
}
