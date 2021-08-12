<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name') ;
            $table->string('slug') ;
            $table->string('image') ;
            $table->float('price') ;
            $table->float('sale')->default(0) ;
            $table->string('title') ;
            $table->longText('short_description');
            $table->longText('description');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('highlight')->default(0);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id') ;
            $table->timestamps();

            // khoas ngoai
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('no action')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action')->onUpdate('cascade') ;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
