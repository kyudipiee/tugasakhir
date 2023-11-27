<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Siswa</h1>

<table id="customers">
  <tr>
    <th>nama</th>
    <th>nisn</th>
    <th>tempat</th>
    <th>tanggal lahir</th>
    <th>jenis kelamin</th>
    <th>alamat</th>
    <th>kecamatan</th>
    <th>provinsi</th>
    <th>zip</th>
    <th>nik ayah</th>
    <th>nama ayah</th>
    <th>tempat ayah</th>
    <th>tanggal lahir ayah</th>
    <th>pekerjaan ayah</th>
    <th>telp ayah</th>
    <th>nik ibu</th>
    <th>nama ibu</th>
    <th>tempat ibu</th>
    <th>tanggal lahir ibu</th>
    <th>pekerjaan ibu</th>
    <th>telp ibu</th>
  </tr>

  @php
      $no=1;
  @endphp

  @foreach ( $data as $row)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $row->nama }}</td>
    <td>{{ $row->nisn }}</td>
    <td>{{ $row->tempat }}</td>
    <td>{{ $row->ttl }}</td>
    <td>{{ $row->jk }}</td>
    <td>{{ $row->alamat }}</td>
    <td>{{ $row->kecamatan }}</td>
    <td>{{ $row->provinsi }}</td>
    <td>{{ $row->zip }}</td>
    <td>{{ $row->nik_ayah }}</td>
    <td>{{ $row->nama_ayah }}</td>
    <td>{{ $row->tempat_ayah }}</td>
    <td>{{ $row->ttl_ayah }}</td>
    <td>{{ $row->pekerjaan_ayah }}
    <td>0{{ $row->telp_ayah }}</td>
    <td>{{ $row->nik_ibu }}</td>
    <td>{{ $row->nama_ibu }}</td>
    <td>{{ $row->tempat_ibu }}</td>
    <td>{{ $row->ttl_ibu }}</td>
    <td>{{ $row->pekerjaan_ibu }}</td>
    <td>0{{ $row->telp_ibu }}</td>
  </tr>
  @endforeach

</table>

</body>
</html>


