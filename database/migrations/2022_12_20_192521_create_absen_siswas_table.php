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
        Schema::create('absen_siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->foreignId('kelas_id');
            $table->string('status_absen');
            $table->string('image');
            $table->date('tgl_absen');
            $table->string('wkt_absen');
            $table->softDeletes();
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
        Schema::dropIfExists('absen_siswas');
    }
};
