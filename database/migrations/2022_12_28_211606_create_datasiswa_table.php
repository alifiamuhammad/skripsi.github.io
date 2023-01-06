<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('NIS');
            $table->string('Nama');
            $table->string('Alamat');
            $table->string('Kelas');
            $table->string('Email');
            $table->string('Jurusan');
            $table->string('Foto');
            $table->string('NoHP');
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
        Schema::dropIfExists('datasiswa');
    }
};
