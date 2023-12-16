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
                <div class="">
                    <button class="button-secondary"><a href="/login" class="link-success">Logout</a></button>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="hero">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 hero-tagline my-auto">
                        <h1>{{ Auth::user()->name }}</h1>
                        <p><span>Lorem ipsum</span> dolor sit amet consectetur adipisicing elit. Quis optio dolores iusto, ad quaerat maxime ex reiciendis. Delectus, dicta.</p>
                        <button class="btn-daftar button-lg-primary rounded-4"><a href="/tambahdataasstudent" class="link-success">Daftar Sekarang</a></button>
                    </div>
                </div>
                <img src="{{asset('assets/img/students.png')}}" alt="" class="position-absolute end-0 bottom-0 img-hero">
                <img src="{{asset('assets/img/Accsent.png')}}" alt="" class="accsent-img h-100 position-absolute top-0 start-0">
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
