<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Islamic School</title>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!--My animate CSS-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
            <div class="container">
                <a class="navbar-brand" href="#">Al-Muttaqin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{url('/faq')}}">FaQ</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" href="{{url('/contact')}}">Contact</a>
                        </li>
                    </ul>
                    <div class="">
                        <button class="button-primary"><a href="/registerakun" class="link-light">Register</a></button>
                        <button class="button-secondary"><a href="/login" class="link-success">Login</a></button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Banner Contactus -->
        <div class="container-fluid banner">
            <div class="container text-center">
                <h4 class="display-4 text-capitalize fw-bold">Contact</h4>
            </div>
        </div>


        <!-- content contact -->
        <div class="container">
            <div class="contact" data-aos="fade-right">
                <h1 class="title text-uppercase">Contact Us</h1>

                <div class="container">
                    <form action="" method="POST" enctype="multipart/form-data" class="contact-form row">
                        <div class="form-field col-lg-12">
                            <input id="name" type="text" class="input-text" name="name" required>
                            <label for="name" class="label"><i class="fas fa-user"></i> Name</label>
                        </div>
                        <div class="form-field col-lg-12">
                            <input id="email" type="text" class="input-text" name="email" required>
                            <label for="email" class="label"><i class="fas fa-user"></i> Email</label>
                        </div>
                        <div class="form-field col-lg-12">
                            <input id="message" type="text" class="input-text" name="message" required>
                            <label for="message" class="label"><i class="fas fa-user"></i> Message</label>
                        </div>
                        <button type="submit" class="kirim col-lg-12"><i class="fas fa-paper-plane"></i> Kirim</button>
                    </form>
                </div>
            </div>
        </div>

        <footer id="footer">
            <div class="footer-top p-4">
                <!-- container -->
                <div class="container">
                    <div class="row p-4">
                        <div class="col">
                            <div class="wrapper-col-1">
                                <h1>Al-Muttaqin</h1>
                                <p>website ini memberikan kemudahan dalam memberikan aspirasi kepada kami.</p>
                                <div class="wrapper-icon mt-4">
                                    <a href="#"><img src="{{asset('template\assets/images/icons8-facebook-30.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('template\assets/images/icons8-instagram-30.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('template\assets/images/icons8-twitter-30.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('template\assets/images/icons8-linkedin-circled-30.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="wrapper-col-2">
                                <h1>INFORMASI KITA</h1>
                                <a href="#">Our Identity</a>
                                <a href="#">Our Activity</a>
                                <a href="#">Our Contact</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="wrapper-col-3">
                                <h1>INFORMASI</h1>
                                <a href="#">Home</a>
                                <a href="#">About</a>
                                <a href="#">FaQ</a>
                                <a href="#">Contact</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="wrapper-col-4">
                                <h1>BANTUAN</h1>
                                <a href="#">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end container -->
            </div>
            <!-- end footer top -->

            <!-- footer bottom -->
            <div class="container">
                <div class="develope-by">
                    Developed by <Strong>Husen Minan, Pratista Cahya Kencana</Strong>
                </div>
            </div>
            <!-- end footer bottom -->
        </footer>
        <script src="{{asset('assets/js/script.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
