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
            $table->enum('status', [1,0])->nullable();
            $table->integer('no_rekening');
            $table->string('nama_sekarang');
            $table->string('nama_pemilik');
            $table->string('no_rumah');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('blok');
            $table->string('dusun'); 
            $table->string('kecamatan');
            $table->enum('status_milik', [1,0])->nullable();
            $table->integer('jml_jiwa_tetap');
            $table->integer('jml_jiwa_tidak_tetap');
            $table->date('tanggal_pasang');
            $table->enum('segel', [1,0])->nullable();
            $table->enum('stop_kran', [1,0])->nullable();
            $table->enum('ceck_valve', [1,0])->nullable();
            $table->enum('kopling', [1,0])->nullable();
            $table->enum('plugran', [1,0])->nullable();
            $table->enum('box', [1,0])->nullable();
            $table->string('bln_billing'); 
            $table->string('thn_billing'); 
            $table->string('sumber_lain');
            $table->string('jenisusaha');
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
