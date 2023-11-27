<?php

namespace App\Imports;

use App\Models\Students;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
{
    return new Students([
        'nama' => $row[1],
        'nisn' => $row[2],
        'tempat' => $row[3],
        'ttl' => $row[4],
        'jk' => $row[5],
        'alamat' => $row[6],
        'kecamatan' => $row[7],
        'provinsi' => $row[8],
        'zip' => $row[9],
        'nik_ayah' => $row[10],
        'nama_ayah' => $row[11],
        'tempat_ayah' => $row[12],
        'ttl_ayah' => $row[13],
        'pekerjaan_ayah' => $row[14],
        'telp_ayah' => $row[15],
        'nik_ibu' => $row[16],
        'nama_ibu' => $row[17],
        'tempat_ibu' => $row[18],
        'ttl_ibu' => $row[19],
        'pekerjaan_ibu' => $row[20],
        'telp_ibu' => $row[21],
        'foto' => $row[22]
    ]);
}

}
