<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relasisambung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sambung', function (Blueprint $table) {
            $table->unsignedInteger('penutupan_id');
           $table->foreign('penutupan_id')->references('id')->on('penutupan')->onDelete('Cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sambung', function (Blueprint $table) {
            //
        });
    }
}
