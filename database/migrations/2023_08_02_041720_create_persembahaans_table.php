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
        Schema::create('persembahans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_persembahan');
            $table->enum('jenis_persembahan',['Persembahan Kolekte', 'Persembahan Khusus', 'Persembahan Persepuluhan','Persembahan Ucapan Syukur','dll']);
            $table->string('jumlah_persembahan');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persembahans');
    }
};
