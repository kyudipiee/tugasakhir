<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            //Data murid
            $table->id();
            $table->string('nama');
            $table->string('nisn');
            $table->string('tempat');
            $table->date('ttl');
            $table->enum('jk', ['pr','lk']);
            $table->bigInteger('telp_students');
            $table->string('alamat');
            //keterangan tempat tinggal
            $table->enum('jurusan', ['ipa','ips','tahfidz']);
            $table->date('tanggal_test');
            //photo data students
            //$table->string('foto');
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
