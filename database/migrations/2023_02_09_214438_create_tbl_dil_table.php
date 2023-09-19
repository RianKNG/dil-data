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
            $table->string('nama_sekarang')->nullable();
            $table->string('nama_pemilik')->nullable();
            $table->string('no_rumah')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('dusun')->nullable();
            $table->string('desa'); 
            $table->string('kecamatan');
            $table->string('status_milik')->nullable();
            $table->integer('jml_jiwa_tetap')->nullable();
            $table->integer('jml_jiwa_tidak_tetap')->nullable();
            $table->date('tanggal_pasang')->nullable();
            $table->date('tanggal_file')->nullable();;
            $table->string('segel')->nullable();
            $table->string('stop_kran')->nullable();
            $table->string('ceck_valve')->nullable();
            $table->string('kopling')->nullable();
            $table->string('plugran')->nullable();
            $table->string('box')->nullable();
            $table->string('sumber_lain')->nullable();
            $table->string('jenisusaha')->nullable();
            $table->string('no_seri')->nullable();
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
