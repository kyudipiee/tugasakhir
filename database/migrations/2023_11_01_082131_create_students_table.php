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
            //keterangan tempat tinggal
            $table->string('alamat');
            $table->string('kecamatan');
            $table->string('provinsi');
            $table->string('zip');
            //Data Ayah
            $table->bigInteger('nik_ayah');
            $table->string('nama_ayah');
            $table->string('tempat_ayah');
            $table->date('ttl_ayah');
            $table->string('pekerjaan_ayah');
            $table->bigInteger('telp_ayah');
            //Data Ibu
            $table->bigInteger('nik_ibu');
            $table->string('nama_ibu');
            $table->string('tempat_ibu');
            $table->date('ttl_ibu');
            $table->string('pekerjaan_ibu');
            $table->bigInteger('telp_ibu');
            //photo data students
            $table->string('foto');
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
