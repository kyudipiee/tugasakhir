@extends('layout.admin')

@section('content')

<body>
    <h1 class="text-center mb-4">Edit Students Data</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Full Name</label>
                              <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp" value="{{ $data->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NISN</label>
                                <input type="text" name="nisn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nisn }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tempat</label>
                                <input type="text" name="tempat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tempat }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="ttl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->ttl }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jk" aria-label="Default select example">
                                    <option selected>{{ $data->jk }}</option>
                                    <option value="pr">Perempuan</option>
                                    <option value="lk">Laki-laki</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->alamat }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->kecamatan }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Provinsi</label>
                                <input type="text" name="provinsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->provinsi }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">ZIP</label>
                                <input type="number" name="zip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->zip }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIK Ayah</label>
                                <input type="text" name="nik_ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nik_ayah }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Ayah</label>
                                <input type="text" name="nama_ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama_ayah }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tempat Ayah</label>
                                <input type="text" name="tempat_ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tempat_ayah }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="ttl_ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->ttl_ayah }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pekerjaan Ayah</label>
                                <input type="text" name="pekerjaan_ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->pekerjaan_ayah }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Telp Ayah</label>
                                <input type="number" name="telp_ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->telp_ayah }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIK Ibu</label>
                                <input type="text" name="nik_ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nik_ibu }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Ibu</label>
                                <input type="text" name="nama_ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama_ibu }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tempat Ibu</label>
                                <input type="text" name="tempat_ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tempat_ibu }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="ttl_ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->ttl_ibu }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pekerjaan Ibu</label>
                                <input type="text" name="pekerjaan_ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->pekerjaan_ibu }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Telp Ibu</label>
                                <input type="number" name="telp_ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->telp_ibu }}">
                              </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

  @endsection
