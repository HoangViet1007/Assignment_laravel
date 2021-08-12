<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnInvioceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invioce_details', function (Blueprint $table) {
             $table->unsignedBigInteger('invioce_id') ;
             $table->unsignedBigInteger('product_id') ;
             $table->string('image') ;
             $table->unsignedDouble('price') ;
             $table->integer('quantity') ;
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
        Schema::table('invioce_details', function (Blueprint $table) {
            $table->dropColumn('invioce_id') ;
            $table->dropColumn('product_id') ;
            $table->dropColumn('image') ;
            $table->dropColumn('price') ;
            $table->dropColumn('quantity') ;
            $table->dropSoftDeletes('deleted_at') ;
        });
    }
}
