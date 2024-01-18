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
        Schema::create('ibadahs', function (Blueprint $table) {
            $table->id('id_ibadah');
            $table->string('jenis_ibadah');
            $table->date('tanggal_ibadah');
            $table->time('jam_ibadah');
            $table->foreign('id_persembahan')->references('id_persembahan')->on('persembahan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ibadahs');
    }
};
