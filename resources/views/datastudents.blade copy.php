<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students Data</title>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <h1 class="text-center mb-4">Students Data</h1>
    <div class="container">
        <a href="/tambahstudents" class="btn btn-success">tambah</a>


        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
                <form action="/students" method="GET">
                    <input type="search" name="search" id="inputPassword" class="form-control" aria-describedby="passwordHelpInline">
                </form>
            </div>

            <div class="col-auto">
                <a href="/exportpdf" class="btn btn-danger">export PDF</a>
            </div>
            <div class="col-auto">
                <a href="/exportexcel" class="btn btn-success">export Excel</a>
            </div>
            <div class="col-auto">
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Import Data
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <form action="/importexcel" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="file" name="file" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>



        <div class="row">

            <table class="table mt-2">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">foto</th>
                    <th scope="col">nama</th>
                    <th scope="col">nisn</th>
                    <th scope="col">tempat</th>
                    <th scope="col">ttl</th>
                    <th scope="col">jk</th>
                    <th scope="col">alamat</th>
                    <th scope="col">kecamatan</th>
                    <th scope="col">provinsi</th>
                    <th scope="col">zip</th>
                    <th scope="col">nik_ayah</th>
                    <th scope="col">nama_ayah</th>
                    <th scope="col">tempat_ayah</th>
                    <th scope="col">ttl_ayah</th>
                    <th scope="col">pekerjaan_ayah</th>
                    <th scope="col">telp_ayah</th>
                    <th scope="col">nik_ibu</th>
                    <th scope="col">nama_ibu</th>
                    <th scope="col">tempat_ibu</th>
                    <th scope="col">ttl_ibu</th>
                    <th scope="col">pekerjaan_ibu</th>
                    <th scope="col">telp_ibu</th>
                    <th scope="col">dibuat</th>
                    <th scope="col">aksi</th>

                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @php
                        $no = 1;
                    @endphp

                  @foreach ($data as $index => $row)
                  <tr>
                    <th scope="row">{{ $index + $data->firstItem() }}</th>
                    <td>
                        <img src="{{ asset('fotostudents/'.$row->foto) }}" alt="" style="width: 70px;">

                    </td>
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
                    <td>0{{ $row->created_at->format('D M Y') }}</td>
                    <td>@mdo</td>
                    <td>
                        <a href="/tampilkandata/{{ $row->id }}" class="btn btn-warning">EDIT</a>
                        <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}" >DELETE</a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              {{ $data->links() }}
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </body>
  <script>
    $('.delete').click( function(){
      var studentsid = $(this).attr('data-id');
      var nama = $(this).attr('data-nama');


      swal({
        title: "Are you sure?",
        text: "You will delete students data with the name "+nama+" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            window.location = "/delete/ "+studentsid+""
          swal("congrats! data deleted successfully", {
            icon: "success",
          });
        } else {
          swal("Data is not deleted");
        }
      });
    });


  </script>
<!--  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
-->
<script>
@if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
@endif
</script>

</html>
