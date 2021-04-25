<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\View;
use Illuminate\Database\Eloquent\Factories\Factory;

class ViewFactory extends Factory
{
    protected $model = View::class;

    public function definition()
    {
        return [
            'article_id' => Article::factory(),
            'ip' => $this->faker->ipv6,
            'created_at' => $this->faker->dateTimeBetween('-2 years'),
        ];
    }
}
