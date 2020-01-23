<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHidanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hidangan', function (Blueprint $table) {
            $table->increments('id_hidangan');
            $table->unsignedInteger('id_restoran');
            $table->string('nama_hidangan');
            $table->enum('jenis_hidangan',['makanan','minuman']);
            $table->unsignedInteger('harga_hidangan');
            $table->string('foto_hidangan');
            $table->timestamps();

            $table->foreign('id_restoran')->references('id_restoran')->on('restoran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hidangan');
    }
}
