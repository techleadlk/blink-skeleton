<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoteFactory extends Factory
{
    protected $model = Vote::class;

    public function definition()
    {
        return [
            'article_id' => Article::factory(),
            'ip' => $this->faker->ipv6,
            'score' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->dateTimeBetween('-2 years'),
        ];
    }
}
