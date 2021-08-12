<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_description') ;
            $table->string('content');
            $table->string('image');
            $table->tinyInteger('status')->default(0) ;
            $table->tinyInteger('highlight')->default(0) ;
            $table->unsignedBigInteger('category_posts_id');
            $table->timestamps();

            $table->foreign('category_posts_id')->references('id')->on('category_posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
