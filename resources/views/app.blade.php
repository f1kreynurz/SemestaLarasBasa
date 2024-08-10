<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Semesta Laras Basa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/Logo3.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="#" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <img src="{{ asset('img/Logo.png') }}" alt="Company Logo">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li class="dropdown"><a href="#services"><span>Services</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>Language Services</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Translation</a></li>
                                    <li><a href="#">Proofreading</a></li>
                                    <li><a href="#">Interpreting</a></li>
                                    <li><a href="#">Bilingual Website Content Writer</a></li>
                                    <li><a href="#">Voice Over</a></li>
                                    <li><a href="#">Language Testing</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#"><span>Research</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Research Assistant</a></li>
                                    <li><a href="#">Journal Consultant</a></li>
                                    <li><a href="#">Gap Research</a></li>
                                    <li><a href="#">Writing Clinic</a></li>
                                    <li><a href="#">Journal Submission Service</a></li>
                                    <li><a href="#">Paper Layouting</a></li>
                                    <li><a href="#">Content Development</a></li>
                                    <li><a href="#">Tracking Journal</a></li>
                                    <li><a href="#">Others</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#"><span>Training</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Corporate in-House Training</a></li>
                                    <li><a href="#">School in-House Training</a></li>
                                    <li><a href="#">IELTS, TOEFL & TOEIC Preperation</a></li>
                                    <li><a href="#">E-Learning</a></li>
                                    <li><a href="#">Public Speaking</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            {{-- <a class="btn-getstarted" href="#about">Get Started</a> --}}

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <img src="{{ asset('img/office.jpg') }}" alt="" data-aos="fade-in" class="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-out">
                    <div class="col-xl-7 col-lg-9 text-center">
                        <h1>Words You Can Trust, Services You Can Rely On</h1>
                        <p>We are present as a study and language service center both at national and international
                            levels</p>
                    </div>
                </div>
                <div class="text-center" data-aos="zoom-out" data-aos-delay="100">
                    <a href="#about" class="btn-get-started">About Us</a>
                </div>

                <div class="row gy-4 mt-5 stats">
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            {{-- <img src="{{ asset('img/icons/government.png') }}" style="width: 50px;height: 50px;margin-bottom: 10px" alt=""> --}}
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Mitra Pemerintah</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Mitra Perusahaan</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Mitra Sekolah</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="36" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Mitra Perguruan Tinggi</p>
                        </div>
                    </div><!-- End Stats Item -->
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Laras Basa<br></h2>
                <p>We have been providing training, language and research assistance since 2013. Officially, we have
                    operated under CV Semesta Raya since 2015. In July 2024, we transitioned to PT Semesta Laras Basa.
                    To date, we have completed over 25,000 translation and proofreading projects for individuals,
                    companies, state-owned enterprises, and both local and international clients.
                </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h2>Vision</h2>
                        <p>
                            Laras Basa hadir sebagai pusat pelayanan kajian dan bahasa baik di tingkat nasional maupun
                            internasional.
                        </p>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h2>Mission</h2>
                        <ul>
                            <li><i class="bi bi-check2-circle" style="color: darkgrey"></i> <span>Menyelenggarakan
                                    pelayanan bahasa yang
                                    terpercaya.</span></li>
                            <li><i class="bi bi-check2-circle" style="color: darkgrey"></i> <span>Menyelenggarakan
                                    pelatihan bahasa dan budaya
                                    yang inovatif.</span></li>
                            <li><i class="bi bi-check2-circle" style="color: darkgrey"></i> <span>Membangun kemitraan
                                    dan kerjasama dengan
                                    berbagai instansi dalam dan luar negeri.</span></li>
                            <li><i class="bi bi-check2-circle" style="color: darkgrey"></i> <span>Menyelenggarakan
                                    pelayanan pengembangan
                                    berbagai bidang riset dan publikasi ilmiah.</span></li>
                        </ul>
                        {{-- <a href="#" class="read-more"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a> --}}
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        {{-- <hr class="blurry-hr"> --}}

        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Laras Basa Board</h2>
                <p>Meet the Teams</p>
            </div><!-- End Section Title -->

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p style="font-size: 32px">Co-Founder</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4" style="justify-content: center">

                    <div class="col-lg-3 mb-4">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg"
                                    alt="wrapkit" class="img-fluid rounded-circle" />
                            </div>
                            <div class="team4 col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">Riyadi Maulaya T. </h5>
                                    <h6 class="subtitle mb-3">Co-Founder</h6>
                                    <p>You can relay on our amazing features list and also our customer services will be
                                        great experience.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i
                                                    class="bi bi-twitter-x"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i
                                                    class="bi bi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i
                                                    class="bi bi-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i
                                                    class="bi bi-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 mb-4">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg"
                                    alt="wrapkit" class="img-fluid rounded-circle" />
                            </div>
                            <div class="team4 col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">Michael Doe</h5>
                                    <h6 class="subtitle mb-3">Property Specialist</h6>
                                    <p>You can relay on our amazing features list and also our customer services will be
                                        great experience.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i
                                                    class="bi bi-twitter-x"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i
                                                    class="bi bi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i
                                                    class="bi bi-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i
                                                    class="bi bi-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div><!-- End Team Member -->

                </div>

            </div>


            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p style="font-size: 32px;padding-top: 45px">Secretary</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Orang ke-1</h4>
                                <span>Jabatan</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Orang ke-2</h4>
                                <span>Jabatan</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Orang Ke-3</h4>
                                <span>Jabatan</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Orang ke-4</h4>
                                <span>Jabatan</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->



        {{-- <!-- About Alt Section -->
        <section id="about-alt" class="about-alt section">

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox pulsating-play-btn"></a>
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Alt Section --> --}}

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">

            <div class="container" data-aos="fade-up">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up" style="padding-bottom: 40px">
                    <h2 style="padding-bottom: 50px">Our Client</h2>
                    <p>Government</p>
                </div><!-- End Section Title -->

                <div class="row gy-4" style="padding-bottom: 50px" data-aos="fade-up">
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/bappeda.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/kai.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/lapan.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/zakat.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/aseansummer.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/pemkotbandung.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/south-african-youth-day.png') }}" class="img-fluid"
                            alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/kemenparekraf.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/perhubungan.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/balailogambesar.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/bappenas.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/pertamina.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->
                </div>

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up" style="padding-bottom: 40px">
                    <p>Company</p>
                </div><!-- End Section Title -->

                <div class="row gy-4" style="padding-bottom: 50px" data-aos="fade-up">
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/infomedia.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/ultimo.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/madina.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/geekseat.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/vodjo.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/kiper.png') }}" class="img-fluid" alt="KIPER">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/quadran.png') }}" class="img-fluid" alt="quadran">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/KEL.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/mercuria.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/rscw.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/tripaneer.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/anindya.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/pos.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/persib.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/kh.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/yakjin.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/hariff.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/cga.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/pupukkujang.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/gsp.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/sil.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/thermochem.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/jcm.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/qenarispa.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/trans-hotel.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->
                </div>

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up" style="padding-bottom: 40px">
                    <p>School</p>
                </div><!-- End Section Title -->

                <div class="row gy-4" style="padding-bottom: 50px" data-aos="fade-up">
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/smpdaaruttauhid.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/smkn7bandung.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/smkn5bandung.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/smkkencana.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/smknasionalbandung.png') }}" class="img-fluid"
                            alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/pasundan1bandung.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/pasundan1cianjur.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/pasundan2cianjur.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/smkbahagia.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/smkbpkpenabur.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/smktelkombandung.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/sman9bandung.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/smabpibandung.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/sman25tangerang.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/sma109.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/assyifa.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->
                </div>

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up" style="padding-bottom: 40px">
                    <p>University</p>
                </div><!-- End Section Title -->

                <div class="row gy-4" style="padding-bottom: 50px" data-aos="fade-up">
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/monash.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/unsw.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/nmu.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/fujen.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/utem.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/upi.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/unpad.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/itb.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/unikom.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/uib.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/telkom.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/polban.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/unjani.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/unpas.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/ui.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/atmajaya.gif') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/petra.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/isbi.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/stks.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/unsil.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/ipb.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/binus.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/maranatha.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/uny.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/trisakti.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/unpar.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/unj.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/its.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/uin.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/ulbi.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/stia.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/riau.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/unpam.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/udayana.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/uta.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="{{ asset('img/clients/unbraw.png') }}" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper" data-speed="600" data-delay="5000"
                    data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item" "="">
            <p>
              <i class=" bi bi-quote quote-icon-left"></i>
                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Deskripsi terkait Section Services</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="
                                M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                </path>
                                </svg>
                                <i class="bi bi-translate"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Language Services</h3>
                            </a>
                            <p>Subheading untuk Language Services.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bi bi-search"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Research</h3>
                            </a>
                            <p>Subheading untuk Research.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bi bi-book-half"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Training</h3>
                            </a>
                            <p>Subheading untuk Training.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section accent-background">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Call To Action</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.</p>
                            <a class="cta-btn" href="#">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-product">Card</li>
                        <li data-filter=".filter-branding">Web</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('img/masonry-portfolio/masonry-portfolio-1.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('img/masonry-portfolio/masonry-portfolio-1.jpg') }}"
                                    title="App 1" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                    title="Product 1" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                    title="Branding 1" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                    title="App 2" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                    title="Product 2" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                    title="Branding 2" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                    title="App 3" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                    title="Product 3" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                    title="Branding 2" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->



        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row g-4 g-lg-0">

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-item">
                            <h3>Free Plan</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                </li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis
                                        hendrerit</span></li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4 featured" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item">
                            <h3>Business Plan</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-item">
                            <h3>Developer Plan</h3>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>

        </section><!-- /Pricing Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                                <div class="faq-content">
                                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                        rhoncus dolor purus non.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                                <div class="faq-content">
                                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                        suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                        convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                                <div class="faq-content">
                                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse
                                        in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                                <div class="faq-content">
                                    <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed
                                        in suscipit sequi. Distinctio ipsam dolore et.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                </div>

            </div>

        </section><!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Subheading untuk Contact</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBu2kYMRfZ7A4HuEAr4HRmkac0SI0MTrH4&q=-6.883177,107.5792616"
                        frameborder="0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>21 Terusan Cibogo Atas</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+62 1234 5678</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>customerservice@semestalarasbasa.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject"
                                        placeholder="Subject" required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="#" class="logo d-flex align-items-center">
                        <span class="sitename">OnePage</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p>United States</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">OnePage</strong> <span>All Rights
                    Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
