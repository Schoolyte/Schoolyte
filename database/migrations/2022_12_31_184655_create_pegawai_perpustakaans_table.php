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
        Schema::create('pegawai_perpustakaans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email', 50)->unique();
            $table->string('pass');
            $table->string('nama');
            $table->text('alamat');
            $table->integer('tlpn');
            $table->char('jenis_kelamin', 2);
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('agama', 10);
            $table->integer('saldo');
            $table->char('status');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai_perpustakaans');
    }
};
