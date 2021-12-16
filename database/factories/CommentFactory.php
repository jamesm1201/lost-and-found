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
            'contact_number'=>$this->faker->numerify('############'),
            'email'=>$this->faker->unique()->email(),
            'content'=>$this->faker->lexify('This is mine ?????? ?????? ??'),
            'post_id'=> $this->faker->randomElement(['2','4','5','6','7','8']),
            
        ];
    }
}
