<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampilans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampilans', function (Blueprint $table) {
            $table->id();
            $table->string('background');
            $table->string('header');
            $table->string('slogan');
            $table->string('judul_sambutan');
            $table->string('hashtag');
            $table->longText('kata_sambutan');
            $table->string('gambar_ketua');
            $table->string('nama_ketua');
            $table->string('keterangan_ketua');
            $table->string('gambar_wakil');
            $table->string('nama_wakil');
            $table->string('keterangan_wakil');
            $table->string('judul_video');
            $table->string('judul2_video');
            $table->longText('link_video');
            $table->string('link_maps');
            $table->string('keterangan_contact');
            $table->string('contact');
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
        Schema::dropIfExists('tampilans');
    }
}
