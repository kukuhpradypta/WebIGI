<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Green Bootstrap Template - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('template/assets/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

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

<body>
    <!-- ======= Top Bar ======= -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">Green</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="{{ asset('template/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto active" href="/">Home</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="#about">Keilmuan Geografi</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="#services">PTN/PTS Geografi</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="#portfolio">Informasi Keprofesian</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="#team">kegiatan IGI</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="#contact">Keanggotaan </a>
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
        @if (!request()->is('/registalum'))
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
        <section id="featured-services" class="featured-services section-bg">
            <div class="container-fluid p-5">
                <div class="row no-gutters">
                    @foreach ($vidios as $vidio)


                        <div class="col-lg-4 col-md-6">
                            <iframe width="100%" height="250" src="{{ $vidio->vidio }}" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="why-us" class="why-us">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 content-item">
                        <div style="background-color: #5cb874" class=" col-12 py-2 ps-3 fw-bold text-light mb-2"
                            style="width: 105%;">KATEGORI 1
                        </div>

                        <div class="row d-flex justify-content-center  flex-wrap" data-aos="zoom-in"
                            data-aos-delay="100">
                            @forelse ($article1 as $artikel1)
                                <div class="ani bg-light col-md-6 col-lg-4 col-10 mb-2 "
                                    style="width: 100%; margin-left: 20px;">
                                    <a href="/showartikel/{{ $artikel1->slug }}">
                                        <a class="card-petugas" href="/showartikel/{{ $artikel1->slug }}">
                                            <div class="row">
                                                <div class="col-4 mt-3 mb-3">
                                                    @if (file_exists(public_path('article-img/' . $artikel1->image)))
                                                        <img src="{{ 'article-img/' . $artikel1->image }}"
                                                            class="card-img-top" alt="...">
                                                    @else
                                                        <img src="{{ asset('storage/' . $artikel1->image) }}"
                                                            class="card-img-top" alt="...">
                                                    @endif
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body" style="width: 100%">
                                                        <p style="color: #5cb874">
                                                            {{ Str::words($artikel1->title, 5) }}</p>
                                                        <p>{{ Str::words($artikel1->excerpt, 25) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                </div>
                                </a>
                            @empty
                                <div class="btn btn-danger">
                                    Tidak Ada Artikel
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 content-item">
                        @yield('content')
                        @yield('loadmore')
                    </div>


                    <div class="col-lg-3 col-md-6 content-item">
                        <div style="background-color: #5cb874" class=" col-12 py-2 ps-3 fw-bold text-light mb-2 "
                            style="width: 105%;">KATEGORI
                            2</div>

                        <div class="row d-flex justify-content-center  flex-wrap" data-aos="zoom-in"
                            data-aos-delay="100">

                            @forelse ($article2 as $artikel2)
                                <div class="ani bg-light col-md-6 col-lg-4 col-10 mb-2 "
                                    style="width: 100%; margin-left: 20px;">
                                    <a href="/showartikel/{{ $artikel2->slug }}">
                                        <a class="card-petugas" href="/showartikel/{{ $artikel2->slug }}">
                                            <div class="row">
                                                <div class="col-4 mt-3 mb-3">
                                                    @if (file_exists(public_path('article-img/' . $artikel2->image)))
                                                        <img src="{{ 'article-img/' . $artikel2->image }}"
                                                            class="card-img-top" alt="...">
                                                    @else
                                                        <img src="{{ asset('storage/' . $artikel2->image) }}"
                                                            class="card-img-top" alt="...">
                                                    @endif
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body" style="width: 100%">
                                                        <p style="color: #5cb874">
                                                            {{ Str::words($artikel2->title, 5) }}</p>
                                                        <p>{{ Str::words($artikel2->excerpt, 25) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                </div>
                                </a>
                            @empty
                                <div class="btn btn-danger">
                                    Tidak Ada Artikel
                                </div>
                            @endforelse
                        </div>

                    </div>
                </div>
            </div>
            </div>

        </section>

        <section id="why-us" class="why-us mb-5">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 content-item">
                        <div style="background-color: #5cb874" class=" col-12 py-2 ps-3 fw-bold text-light"
                            style="width: 105%;">KATEGORI 3
                        </div>

                        <div class="row d-flex justify-content-center flex-wrap ml-5" data-aos="zoom-in"
                            data-aos-delay="100">
                            @forelse ($article3 as $artikel3)
                                <div class="ani bg-light col-md-6 col-lg-4 col-10 mb-2 mt-2"
                                    style="width: 100%; margin-left: 20px;">
                                    <a href="/showartikel/{{ $artikel3->slug }}">
                                        <a class="card-petugas" href="/showartikel/{{ $artikel3->slug }}">
                                            <div class="row">
                                                <div class="col-4 mt-3 mb-3">
                                                    @if (file_exists(public_path('article-img/' . $artikel3->image)))
                                                        <img src="{{ 'article-img/' . $artikel3->image }}"
                                                            class="card-img-top" alt="...">
                                                    @else
                                                        <img src="{{ asset('storage/' . $artikel3->image) }}"
                                                            class="card-img-top" alt="...">
                                                    @endif
                                                </div>
                                                <div class="col-8">
                                                    <div class="card-body" style="width: 100%">
                                                        <p style="color: #5cb874">
                                                            {{ Str::words($artikel3->title, 5) }}</p>
                                                        <p>{{ Str::words($artikel3->excerpt, 25) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                </div>
                                </a>
                            @empty
                                <div class="btn btn-danger">
                                    Tidak Ada Artikel
                                </div>
                            @endforelse





                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6  content-item">

                        @yield('content2')
                    </div>

                    <div class="col-lg-3 col-md-6 content-item">
                        <div style="background-color: #5cb874" class=" col-12 py-2 ps-3 fw-bold text-light ">INSTAGRAM
                        </div>
                        @foreach ($settings as $item)
                            @if ($item->display_name == 'Instagram Igi')
                                <img src="{{ asset("storage/$item->value") }}" class="mt-2" alt=""
                                    width="100%" height="400px">
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= Our Clients Section ======= -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <h3>Green</h3>
                <p>
                    Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis
                    magni eligendi fuga maxime saepe commodi placeat.
                </p>
                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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
                    <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

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
