<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nim')->unique();
            $table->string('nama_mahasiswa');
            $table->string('prodi');
            $table->string('email')->unique();
            $table->string('alamat');
            $table->enum('status', ['Aktif', 'Non Aktif']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};