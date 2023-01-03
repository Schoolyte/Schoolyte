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
        Schema::create('peminjaman_bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->foreignId('buku_id');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->integer('jumlah');
            $table->string('status');
            $table->integer('telat')->default(0);
            $table->integer('sanksi')->default(0);
            $table->date('pengembalian');
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
        Schema::dropIfExists('peminjaman_bukus');
    }
};
