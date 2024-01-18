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
        Schema::create('jemaats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('gol_darah',['A', 'B', 'AB', 'O']);
            $table->enum('jenis_kelamin',['Pria', 'Wanita']);
            $table->string('alamat_jemaat');
            $table->string('no_telepon');
            $table->foreign('id_wilayah')->references('nama_wilayah')->on('wilayahs');
            $table->string('jenis_pelayanan');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jemaats');
    }
};
