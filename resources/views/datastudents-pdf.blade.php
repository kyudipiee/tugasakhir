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
  font-size: 10px
}

#customers tr {

  font-size: 10px
}

</style>
</head>
<body>

<h1>Data Siswa</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>NISN</th>
    <th>Place of Birth</th>
    <th>Birthday</th>
    <th>Gender</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Major</th>
    <th>Date of Test</th>
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
    <td>0{{ $row->telp_students }}</td>
    <td>{{ $row->alamat }}</td>
    <td>{{ $row->jurusan }}</td>
    <td>{{ $row->tanggal_test }}</td>

  </tr>
  @endforeach

</table>

</body>
</html>


