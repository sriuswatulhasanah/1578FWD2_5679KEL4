<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableBudidayaTumbuhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budidaya_tumbuhan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tumbuhan_id',false,true);
            $table->foreign('tumbuhan_id')->references('id')->on('tumbuhan')->onDelete('cascade');
            $table->integer('budidaya_id',false,true);
            $table->foreign('budidaya_id')->references('id')->on('budidaya')->onDelete('cascade');
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
        Schema::drop('budidaya_tumbuhan');
    }
}
