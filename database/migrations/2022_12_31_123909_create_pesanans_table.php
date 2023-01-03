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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stand_id')->nullable();
            $table->foreignId('siswa_id')->nullable();
            $table->foreignId('guru_id')->nullable();
            $table->integer('total_harga');
            $table->text('catatan')->nullable();
            $table->enum('status', ['pending', 'dikonfirmasi', 'selesai'])->default('pending');
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
        Schema::dropIfExists('pesanans');
    }
};
