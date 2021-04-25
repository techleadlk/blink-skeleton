<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->foreignId('article_id')->constrained('articles');
            $table->ipAddress('ip');
            $table->primary(['article_id', 'ip']);
            $table->tinyInteger('score');
            $table->dateTime('created_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
