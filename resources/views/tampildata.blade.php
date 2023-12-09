@extends('layout.admin')

@section('content')

<div class="container">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-4" style="color: #4835d4;">Students Infomation</h3>

                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <label class="form-label" for="formname">Full Name</label>
                                                    <input type="text" name="nama" id="formname" class="form-control" value="{{ $data->nama }}"/>
                                                    @error('name')
                                                        <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <label class="form-label" for="formnisn">NISN</label>
                                                    <input type="number" name="nisn" id="formnisn" class="form-control" value="{{ $data->nisn }}"/>
                                                    @error('nisn')
                                                        <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">

                                                    <div class="form-outline">
                                                        <label class="form-label" for="formplace">Place of Birth</label>
                                                        <input type="text" name="tempat" id="formplace" class="form-control" value="{{ $data->tempat }}"/>
                                                        @error('place')
                                                            <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="formttl">Date of Birth</label>
                                                        <input type="date" id="formttl" class="form-control" value="{{ $data->ttl }}"/>
                                                        @error('ttl')
                                                            <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <label class="form-label" for="formjk">Gender</label>
                                                    <select class="form-control form-control" id="defaultSelect" name="jk" aria-label="Default select example">
                                                        <option selected>{{ $data->jk }}</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                    @error('jk')
                                                        <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <label class="form-label" for="formtelp_students">Phone Number</label>
                                                <input type="number" name="telp_students" id="formtelp_students" class="form-control" value="{{ $data->telp_students }}"/>
                                                @error('telp_students')
                                                    <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-outline form-white">
                                                    <label class="form-label" for="form">Address</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"> {{ $data->alamat }}</textarea>
                                                    @error('address')
                                                        <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 bg-primary ">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-4 text-white">Contact Details</h3>

                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <label class="form-label text-white" for="form3Examplev4">Major</label>
                                                    <select class="form-control form-control" id="defaultSelect" name="jurusan" aria-label="Default select example">
                                                        <option selected>{{ $data->jurusan }}</option>
                                                        <option value="1">IPA</option>
                                                        <option value="2">IPS</option>
                                                        <option value="2">TAHFIDZ</option>
                                                    </select>
                                                    @error('jk')
                                                        <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <label class="form-label text-white" for="form3Examplev3">Date of Test</label>
                                                    <input type="date" id="form3Examplev3" name="tanggal_test" class="form-control" value="{{ $data->tanggal_test }}"/>
                                                    @error('tanggal_test')
                                                        <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                            <div class="px-5">
                                                <button type="submit" class="btn btn-primary btn-lg bg-light text-primary">Registration</button>
                                            </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
