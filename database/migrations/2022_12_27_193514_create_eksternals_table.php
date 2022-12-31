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
        Schema::create('eksternals', function (Blueprint $table) {
            $table->id();
            $table->string('email',50)->unique();
            $table->string('pass');
            $table->string('nama');
            $table->string('alamat');
            $table->string('tlpn');
            $table->char('jenis_kelamin',2);
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('agama', 10);
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
        Schema::dropIfExists('eksternals');
    }
};
