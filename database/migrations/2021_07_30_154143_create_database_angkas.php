<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabaseAngkas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('database_angkas', function (Blueprint $table) {
            $table->id();
            $table->integer('prodi');
            $table->integer('mahasiswa');
            $table->integer('dosen');
            $table->integer('ukm');
            $table->integer('himpunan');
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
        Schema::dropIfExists('database_angkas');
    }
}
