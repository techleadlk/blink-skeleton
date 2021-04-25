<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use App\Models\View;
use App\Models\Vote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create();

        $categories = Category::factory(10)->create();

        Article::factory(100)
            ->create()
            ->each(function (Article $article) use ($categories) {
                Vote::factory(rand(10, 15))->create(['article_id' => $article->id]);
                View::factory(rand(90, 110))->create(['article_id' => $article->id]);
                $article->categories()->attach($categories->random(rand(3, 5))->pluck('id')->all());
            });
    }
}
