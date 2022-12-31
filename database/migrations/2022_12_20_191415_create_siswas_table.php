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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id');
            $table->foreignId('eksternal_id');
            $table->string('email',50)->unique();
            $table->string('pass', 10);
            $table->string('nama');
            $table->integer('no_absen');
            $table->string('alamat');
            $table->string('tlpn');
            $table->integer('nis');
            $table->char('jenis_kelamin',2);
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('agama', 10);
            $table->integer('saldo');
            $table->string('semester');
            $table->char('status');
            $table->string('image');
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
        Schema::dropIfExists('siswas');
    }
};