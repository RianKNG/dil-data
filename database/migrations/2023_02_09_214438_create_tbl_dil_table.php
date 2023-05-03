<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_dil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status')->nullable();
            $table->string('cabang');
            $table->integer('no_rekening');
            $table->string('nama_sekarang');
            $table->string('nama_pemilik');
            $table->string('no_rumah');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('blok');
            $table->string('dusun'); 
            $table->string('desa'); 
            $table->string('kecamatan');
            $table->string('status_milik')->nullable();
            $table->integer('jml_jiwa_tetap');
            $table->integer('jml_jiwa_tidak_tetap');
            $table->date('tanggal_pasang');
            $table->date('tanggal_file');
            $table->string('segel')->nullable();
            $table->string('stop_kran')->nullable();
            $table->string('ceck_valve')->nullable();
            $table->string('kopling')->nullable();
            $table->string('plugran')->nullable();
            $table->string('box')->nullable();
            $table->string('sumber_lain');
            $table->string('jenisusaha');
            $table->string('no_seri'); 
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
        Schema::dropIfExists('tbl_dil');
    }
}
