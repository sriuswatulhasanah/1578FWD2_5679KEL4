<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableTumbuhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tumbuhan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',30);
            $table->integer('pengelola_id',false,true);
            $table->foreign('pengelola_id')->references('id')->on('pengelola')->onDelete('cascade');
            $table->integer('jenis_id',false,true);
            $table->foreign('jenis_id')->references('id')->on('jenis')->onDelete('cascade');
            $table->integer('kategori_id',false,true);
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
            $table->integer('tempat_id',false,true);
            $table->foreign('tempat_id')->references('id')->on('tempat')->onDelete('cascade');
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
        Schema::drop('tumbuhan');
    }
}
