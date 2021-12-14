<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->firstName(),
            'email'=>$this->faker->unique()->email(),
            //check numerify
            'contact_number'=>$this->faker->numerify('############'),
            'date_found_lost'=>$this->faker->dateTimeBetween('+0 days', '+2 years'),
            'content'=>$this->faker->lexify('hello ??????????????'),
            //'place_id'=>$this->faker->unique()->numberBetween(2,14),
            //'item_id'=> $this->faker->unique()->numberBetween(2,14),
            'place_id'=> $this->faker->randomElement(['3','4','5','6','7','8','9','10']),
            'item_id'=> $this->faker->randomElement(['3','4','5','6','7','8','9','10']),
        ];
    }
}
