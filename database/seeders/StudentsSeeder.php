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
            'telp_students' => '081322334411',
            //alamat
            'alamat' => 'jakarta',
            'kecamatan' => 'ciracas',
            'provinsi' => 'jakarta timur',
            'zip' => '37701'

        ]);
    }
}
