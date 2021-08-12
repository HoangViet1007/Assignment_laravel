<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnInvioceDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invioce_details', function (Blueprint $table) {
            $table->unsignedBigInteger('option_id') ;
            $table->unsignedBigInteger('attribute_id') ;
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
            $table->dropColumn('option_id') ;
            $table->dropColumn('attribute_id') ;
        });
    }
}
