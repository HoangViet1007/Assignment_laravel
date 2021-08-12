<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInviocesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invioces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id') ;
            $table->string('name') ;
            $table->string('email') ;
            $table->string('phone') ;
            $table->string('address') ;
            $table->string('content') ;
            $table->unsignedDouble('total_price') ;
            $table->tinyInteger('status')->default(config('common.invoice.status.cho_duyet')) ;
            $table->timestamps();
            $table->SoftDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invioces');
    }
}
