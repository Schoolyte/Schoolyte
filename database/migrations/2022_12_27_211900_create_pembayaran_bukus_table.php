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
        Schema::create('pembayaran_bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->string('kelas');
            $table->string('semester');
            $table->integer('nominal');
            $table->string('status');
            $table->string('tgl_pembayaran');
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
        Schema::dropIfExists('pembayaran_bukus');
    }
};
