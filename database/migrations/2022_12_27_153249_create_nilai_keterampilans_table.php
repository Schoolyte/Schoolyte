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
        Schema::create('nilai_keterampilans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->foreignId('mapel_id');
            $table->foreignId('kelas_id');
            $table->integer('tugas1');
            $table->integer('tugas2');
            $table->integer('tugas3');
            $table->integer('praktikum1');
            $table->integer('praktikum2');
            $table->integer('rata2');
            $table->integer('semester');
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
        Schema::dropIfExists('nilai_keterampilans');
    }
};
