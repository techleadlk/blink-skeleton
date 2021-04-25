<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->unsignedInteger('total_score')->default(0);
            $table->unsignedInteger('votes_count')->default(0);
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE articles ADD FULLTEXT full(title, body)');
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
