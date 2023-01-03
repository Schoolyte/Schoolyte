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
        Schema::create('sumbang_bukus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('siswa_id');
            $table->string('nama_buku');
            $table->year('tahun_terbit');
            $table->string('nama_penulis');
            $table->text('rincian_buku');
            $table->integer('jumlah_buku');
            $table->string('image');
            $table->string('kategori_buku');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sumbang_bukus');
    }
};
