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
                                <label for="exampleInputEmail1" class="form-label">Place of Birth</label>
                                <input type="text" name="tempat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tempat }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
                                <input type="date" name="ttl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->ttl }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Gender</label>
                                <select class="form-select" name="jk" aria-label="Default select example">
                                    <option selected>{{ $data->jk }}</option>
                                    <option value="pr">Perempuan</option>
                                    <option value="lk">Laki-laki</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                <input type="number" name="telp_students" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tempat }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Address</label>
                                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->alamat }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Subdistricts</label>
                                <input type="text" name="kecamatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->kecamatan }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Province</label>
                                <input type="text" name="provinsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->provinsi }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">ZIP</label>
                                <input type="number" name="zip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->zip }}">
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
