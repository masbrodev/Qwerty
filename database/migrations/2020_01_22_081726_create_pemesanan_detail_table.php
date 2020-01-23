<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_detail', function (Blueprint $table) {
            $table->increments('id_pemesanan_detail');
            $table->unsignedInteger('id_pemesanan');
            $table->unsignedInteger('id_hidangan');
            $table->unsignedInteger('jumlah_hidangan');
            $table->unsignedInteger('total_harga_hidangan');
            $table->timestamps();

            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanan');
            $table->foreign('id_hidangan')->references('id_hidangan')->on('hidangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan_detail');
    }
}
