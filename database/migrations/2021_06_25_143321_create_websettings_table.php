<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websettings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name') ;
            $table->string('slug') ;
            $table->string('image') ;
            $table->string('email') ;
            $table->string('address');
            $table->string('phone');
            $table->string('description') ;
            $table->tinyInteger('status')->default((0));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websettings');
    }
}
