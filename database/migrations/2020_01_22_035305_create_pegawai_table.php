<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id_pegawai');
            $table->unsignedInteger('id_restoran');
            $table->string('nama_pegawai');
            $table->string('email_pegawai');
            $table->string('username_pegawai');
            $table->string('password_pegawai');
            $table->string('jabatan_pegawai');
            $table->string('foto_pegawai');
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
        Schema::dropIfExists('pegawai');
    }
}
