<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <form action="/insertdatauser" method="POST" enctype="multipart/form-data">
                                <div class="row g-0">
                                    @csrf
                                        <div class="col-lg-6">
                                            <div class="p-5">
                                                <h3 class="fw-normal mb-4" style="color: #048853;">Students Infomation</h3>
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
                                        <div class="col-lg-6" style="background-color: #048853;">
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
                                                <button type="submit" class="btn btn-primary btn-lg bg-light text-success">Registration</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>
</html>
