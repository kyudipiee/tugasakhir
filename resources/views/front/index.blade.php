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
    <body class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
            <div class="container">
                <a class="navbar-brand" href="#">Al-Muttaqin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{url('/faq')}}">FaQ</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                        </li>
                    </ul>
                    <div class="">
                        <button class="button-primary"><a href="/registerakun" class="link-light">Register</a></button>
                        <button class="button-secondary"><a href="/login" class="link-success">Login</a></button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="hero">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 hero-tagline my-auto">
                        <h1>Al-Muttaqin Solusi Sekolah Islami</h1>
                        <p><span>Lorem ipsum</span> dolor sit amet consectetur adipisicing elit. Quis optio dolores iusto, ad quaerat maxime ex reiciendis. Delectus, dicta.</p>
                        <button class="btn-daftar button-lg-primary rounded-4"><a href="/login" class="link-success">Daftar Sekarang</a></button>
                    </div>
                </div>
                <img src="{{asset('assets/img/students.png')}}" alt="" class="position-absolute end-0 bottom-0 img-hero">
                <img src="{{asset('assets/img/Accsent.png')}}" alt="" class="accsent-img h-100 position-absolute top-0 start-0">
            </div>
        </section>

        <!-- About -->
        <section id="about-home">
            <div class="container">
                <div class="row p-5">
                    <div class="col-12">
                        <p class="identity">Our Identity</p>
                        <div class="row">
                            <div class="col title-about">
                                <p>Al-Muttaqin Sekolah Islam Terkemuka di Indonesia</p>
                            </div>
                            <div class="col content-about">
                                <p>Kami hadir untuk memberkati setiap keluarga yang memilih Al-Muttaqin sebagai rumah kedua mereka melalui
                                    pendidikan yang komprehensif di sekolah Islam. Lulusan kami diperlengkapi dengan visi untuk memimpin dan
                                    melayani dimanapun Tuhan menempatkan mereka. Identitas utama kami adalah panggilan untuk melayani, dan
                                    karena itu, kami mengabdikan diri untuk pertumbuhan perjalanan iman siswa kami.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="{{asset('assets/img/studentinclass.jpg')}}" alt="" class="studentclass rounded-5">
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Activity -->
        <section id="our-activity" class="p-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3 text-center">
                        <a href="#" style="text-decoration: none" class="link-dark"><h1 class="text-center">Our Activty</h1></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 mt-3" data-aos="fade-right">
                        <img src="{{asset('assets/img/badminton.jpg')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mt-3" data-aos="fade-left">
                        <img src="{{asset('assets/img/badmintongirl.jpg')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mt-3" data-aos="fade-right">
                        <img src="{{asset('assets/img/basket.jpg')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mt-3" data-aos="fade-left">
                        <img src="{{asset('assets/img/class.jpg')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mt-3" data-aos="fade-right">
                        <img src="{{asset('assets/img/soccer.jpg')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 mt-3" data-aos="fade-left">
                        <img src="{{asset('assets/img/studying.jpg')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3 col-md-6 mt-3" data-aos="fade-right">
                        <img src="{{asset('assets/img/surau.jpg')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3" data-aos="fade-left">
                        <img src="{{asset('assets/img/surau.jpg')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3" data-aos="fade-right">
                        <img src="{{asset('assets/img/surau.jpg')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3" data-aos="fade-left">
                        <img src="{{asset('assets/img/surau.jpg')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1 col-sm-12 mt-3" data-aos="fade-right">
                        <img src="{{asset('assets/img/surau.jpg')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12 mt-3" data-aos="fade-left">
                        <img src="{{asset('assets/img/surau.jpg')}}" alt="" class="img-fluid rounded-3" style="width: 100%;">
                    </div>
                </div>
            </div>
        </section>

        <!-- content -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">

                    </div>
                </div>
            </div>
        </section>

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
