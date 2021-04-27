<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraphs(rand(1, 3), true),
            'user_id' => User::factory(),
            'created_at' => $this->faker->dateTimeBetween('-1 year')
        ];
    }
}
