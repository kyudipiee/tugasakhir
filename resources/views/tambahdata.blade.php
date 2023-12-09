@extends('layout.admin')

@section('content')

<div class="container">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                        <div class="row g-0">

                            @csrf
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <h3 class="fw-normal mb-4" style="color: #4835d4;">Students Infomation</h3>

                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Examplev4">Full Name</label>
                                                    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
                                                    @error('name')
                                                        <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Examplev4">NISN</label>
                                                    <input type="text" name="nisn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    @error('nisn')
                                                        <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Examplev2">Place of Birth</label>
                                                        <input type="text" name="tempat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        @error('tempat')
                                                            <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form3Examplev3">Date of Birth</label>
                                                        <input type="date" name="ttl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                        @error('ttl')
                                                            <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Examplev4">Gender</label>
                                                    <select class="form-control form-control" id="defaultSelect" name="jk" aria-label="Default select example">
                                                        <option value="" selected>Select Gender</option>
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
                                                    <label class="form-label" for="form3Examplev4">Phone Number</label>
                                                    <input type="number" name="telp_students" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    @error('telp_students')
                                                        <div class="alert alert-danger mt-1" style="color: red;">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-outline form-white">
                                                    <label class="form-label" for="form3Examplea2">Address</label>
                                                    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                                                <select class="form-control form-control" name="jurusan" id="defaultSelect" name="jurusan" aria-label="Default select example">
                                                    <option value="" selected>Select Major</option>
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
                                                <input type="date" name="tanggal_test" id="form3Examplev3" class="form-control" />
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
