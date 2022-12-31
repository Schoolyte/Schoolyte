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
        Schema::create('wali_siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->string('email',50)->unique();
            $table->string('pass', 10);
            $table->string('nama');
            $table->string('tlpn');
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
        Schema::dropIfExists('wali_siswas');
    }
};
