<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'nama' => 'Tita',
            'nisn' => '12345678910',
            'tempat' => 'ciamis',
            'ttl' => '2002-06-02',
            'jk' => 'pr',
            //alamat
            'alamat' => 'jakarta',
            'kecamatan' => 'ciracas',
            'provinsi' => 'jakarta timur',
            'zip' => '37701',
            //ayah
            'nik_ayah' => '7366363663636',
            'nama_ayah' => 'anang',
            'tempat_ayah' => 'tasik',
            'ttl_ayah' => '1971-06-03',
            'pekerjaan_ayah' => 'penyanyi',
            'telp_ayah' => '089877886626',
            //ibu
            'nik_ibu' => '3883762662849',
            'nama_ibu' => 'syahrini',
            'tempat_ibu' => 'yogja',
            'ttl_ibu' => '1988-08-17',
            'pekerjaan_ibu' => 'irt',
            'telp_ibu' => '081322334411'
        ]);
    }
}
