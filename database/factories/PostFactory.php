<?php

namespace Database\Factories;
use App\Models\Post;
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
            'place_id'=>$this->faker->randomElement(['1', '2']),
        ];
    }
}
