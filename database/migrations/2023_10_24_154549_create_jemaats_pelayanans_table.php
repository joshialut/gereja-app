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
        Schema::create('jemaats_pelayanans', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_jemaats')->references('id_jemaats')->on('jemaats');
            $table->foreign('id_pelayanas')->references('id_pelayanans')->on('pelayanans');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jemaats_pelayanans');
    }
};
