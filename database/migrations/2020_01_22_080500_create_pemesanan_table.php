<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->increments('id_pemesanan');
            $table->unsignedInteger('id_restoran');
            $table->unsignedInteger('id_pembeli');
            $table->unsignedInteger('total_pemesanan');
            $table->enum('status_pemesanan',['Belum Dibayar'],['Lunas'])->default('Belum Dibayar');
            $table->timestamps();

            $table->foreign('id_restoran')->references('id_restoran')->on('restoran');
            $table->foreign('id_pembeli')->references('id_pembeli')->on('pembeli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}
