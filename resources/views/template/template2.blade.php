<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Ikatan Geografi Indonesia</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('template/assets/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Green - v4.6.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        .ani {
            transition: 500ms;
        }

        .ani:hover {
            -ms-transform: scale(0.98);
            -webkit-transform: scale(0.98);
            transform: scale(0.98);
            transition: 300ms;
            filter: brightness(95%);
        }

        .ani:active {
            transition: 300ms;
            filter: brightness(80%);
        }

        @media (max-width: 768px) {
            .ftk {
                width: 50%;
                margin: auto;
                margin-top: 10px;
            }
        }

    </style>
</head>

<body style="font-family: 'Poppins', sans-serif;">
    <!-- ======= Top Bar ======= -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
            {{-- <h1 class="logo me-auto"><a href="index.html">Green</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo me-auto"><img
                    src="{{ asset('template/assets/img/team/logo-igi-ok-2.PNG') }}" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto active" href="/">Home</a>
                    </li>
                    <li class="dropdown"><a>Keilmuan Geografi <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="elearning">E-Learning Content</a></li>
                            <li><a href="jurnalilmiah">Jurnal Ilmiah</a></li>
                            <li><a href="sharingcontent">Sharing Content</a></li>
                            <li><a href="profileanggota">Profile Anggota</a></li>
                            <li><a href="keilmuangeografi">Keilmuan geografi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="/ptnptsgeografi">PTN/PTS Geografi</a>
                    </li>
                    <li class="dropdown"><a>Informasi Keprofesian <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="jeniskeprofesian">Jenis Keprofesian</a></li>
                            <li><a href="profillembaga">Profil Lembaga</a></li>
                            <li><a href="informasidanpeluang">Informasi dan Peluang</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a>Kegiatan IGI <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="berita">Berita dan Aktivitas</a></li>
                            <li><a href="profiligidanpengurus">Profil IGI dan Pengurus</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="keanggotaan">Keanggotaan </a>
                    </li>
                    <li>
                        <a class="getstarted scrollto rounded-pill" href="#about">Login</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        @if (!request()->is())
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    <!-- Slide 1 -->
                    @foreach ($sliders as $key => $bg)
                        <div class="carousel-item  {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $bg->image) }}" class="d-block" alt="...">
                            <div class="carousel-container">
                                <div class="container">
                                    <h2
                                        class="
                                        animate__animated animate__fadeInDown
                                    ">
                                        {{ $bg->title }}
                                    </h2>
                                    <p class="animate__animated animate__fadeInUp">
                                        {{ $bg->content }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        @endif
    </section>
    <!-- End Hero -->
    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <div class="container mt-5 mb-5">
            @yield('main')
        </div>
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <h3>Ikatan Geograf Indonesia</h3>
                <p>
                    Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis
                    magni eligendi fuga maxime saepe commodi placeat.
                </p>
                <div class="social-links">
                    <a href="#" class="bg-primary twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="bg-primary facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="bg-primary instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="bg-primary google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="bg-primary linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
                <div class="copyright">
                    &copy; Copyright <strong><span>Green</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
                    Designed by
                    <a href="https://bootstrapmade.com/" style="color:#B983FF">BootstrapMade</a>
                </div>
            </div>
        </footer>
        <!-- End Footer`1 -->

        <a href="#" class="bg-primary back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i>
        </a>
        <!-- Vendor JS Files -->
        <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('template/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('template/assets/js/main.js') }}"></script>
</body>

</html>
