<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('image') ;
            $table->string('phone')->unique(); ;
            $table->string('address',255);
            $table->integer('gender')->default(1);
            $table->integer('role')->default(1);
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('gender');
            $table->dropColumn('role');
            $table->dropColumn('status');
        });
    }
}
