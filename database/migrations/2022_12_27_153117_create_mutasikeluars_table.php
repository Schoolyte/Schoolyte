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
        Schema::create('mutasikeluars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');$table->string('nama');$table->integer('nisn');$table->char('jenis_kelamin',2);$table->string('ttl');$table->string('orangtua');$table->text('alamat');$table->string('sekolah_tujuan');$table->string('kelas');
            $table->string('email',50)->unique();
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
        Schema::dropIfExists('mutasikeluars');
    }
};
