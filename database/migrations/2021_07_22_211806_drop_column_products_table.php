<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('image') ;
            $table->dropColumn('price') ;
            $table->dropColumn('sale') ;
            $table->dropColumn('amount') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('image') ;
            $table->float('price') ;
            $table->float('sale')->default(0) ;
            $table->integer('amount')->after('sale') ;
        });
    }
}
