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
        'telp_students' => $row[6],
        'alamat' => $row[7],
        'jurusan' => $row[8],
        'tanggal_test' => $row[9],
    ]);
}

}
