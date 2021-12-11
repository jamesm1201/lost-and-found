<?php

namespace Database\Factories;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->firstName(),
            'contact_number'=>$this->faker->str_random(12)->numerify('############'),
            'email'=>$this->faker->unique()->email(),
            'content'=>$this->faker->str_random(40),
        ];
    }
}
