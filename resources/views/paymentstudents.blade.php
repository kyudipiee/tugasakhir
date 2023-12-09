<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran Daftar Pesantren Al-Muttaqin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Pembayaran Pendaftaran Pesantren</h1>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Payment</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <form action="/payment" method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Siapa nama kamu?">
                    </div>
                    <div class="mb-3">
                        <label for="telp_students" class="form-label">Phone Number</label>
                        <input type="number" name="telp_students" class="form-control" id="telp_students" aria-describedby="emailHelp" placeholder="berapa nomor telp kamu?">
                    </div>
                    <div class="mb-3">
                        <label for="major" class="form-label">Major</label>
                        <select class="form-control form-control" name="jurusan" id="defaultSelect" name="jurusan" aria-label="Default select example">
                            <option value="" selected>Select Major</option>
                            <option value="1">IPA</option>
                            <option value="2">IPS</option>
                            <option value="2">TAHFIDZ</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Date of Test</label>
                        <input type="date" name="tanggal_test" id="tanggal_test" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="telp_students" class="form-label">Qry</label>
                        <input type="number" name="qty" class="form-control" id="qty" aria-describedby="emailHelp" placeholder="berapa nomor telp kamu?">
                    </div>
                    <button type="submit" class="btn btn-primary"> CHECKOUT </button>
            </form>

        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
