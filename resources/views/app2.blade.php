<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT. Semesta Laras Basa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('new/img/logo.png') }}" rel="icon">
    <link href="{{ asset('new/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('new/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('new/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('new/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left">
                <img src="{{ asset('new/img/logo-1.png') }}" alt="" title="" />
                <h1><a href="#intro" class="scrollto" style="text-decoration: none;">Semesta Laras Basa</a></h1>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    {{-- <li><a href="#services">Services</a></li> --}}
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li class="menu-has-children"><a href="#services">Services</a>
                        <ul>
                            <li><a href="#">Language Assistant</a></li>
                            <li><a href="#">Research Assistant</a></li>
                            <li><a href="#">Training</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel" data-interval="5000">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="{{ asset('new/img/intro-carousel/6.jpg') }}"
                                alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Amplifying your impacts through language</h2>
                                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                            </div>
                            <h3>We Have Served</h3>
                            <section id="facts" class="wow fadeIn">
                                <div class="container">
                                    <div class="row counters">
                                        <div class="col-lg-3 col-6 text-center">
                                            <span data-toggle="counter-up">12</span>
                                            <p>Governmental Institutions</p>
                                        </div>
                                        <div class="col-lg-3 col-6 text-center">
                                            <span data-toggle="counter-up">25</span>
                                            <p>Companies</p>
                                        </div>
                                        <div class="col-lg-3 col-6 text-center">
                                            <span data-toggle="counter-up">36</span>
                                            <p>Universities</p>
                                        </div>
                                        <div class="col-lg-3 col-6 text-center">
                                            <span data-toggle="counter-up">16</span>
                                            <p>Schools</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('new/img/intro-carousel/7.jpg') }}"
                                alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Amplifying your impacts through language</h2>
                                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                            </div>
                            <h3>We Have Served</h3>
                            <section id="facts" class="wow fadeIn">
                                <div class="container">
                                    <div class="row counters">
                                        <div class="col-lg-3 col-6 text-center">
                                            <span data-toggle="counter-up">12</span>
                                            <p>Governmental Institutions</p>
                                        </div>
                                        <div class="col-lg-3 col-6 text-center">
                                            <span data-toggle="counter-up">25</span>
                                            <p>Companies</p>
                                        </div>
                                        <div class="col-lg-3 col-6 text-center">
                                            <span data-toggle="counter-up">36</span>
                                            <p>Universities</p>
                                        </div>
                                        <div class="col-lg-3 col-6 text-center">
                                            <span data-toggle="counter-up">16</span>
                                            <p>Schools</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('new/img/intro-carousel/8.jpg') }}"
                                alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Amplifying your impacts through language</h2>
                                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                            </div>
                            <h3>We Have Served</h3>
                            <section id="facts" class="wow fadeIn">
                                <div class="container">
                                    <div class="row counters">
                                        <div class="col-lg-3 col-6 text-center">
                                            <span data-toggle="counter-up">12</span>
                                            <p>Governmental Institutions</p>
                                        </div>
                                        <div class="col-lg-3 col-6 text-center">
                                            <span data-toggle="counter-up">25</span>
                                            <p>Companies</p>
                                        </div>
                                        <div class="col-lg-3 col-6 text-center">
                                            <span data-toggle="counter-up">36</span>
                                            <p>Universities</p>
                                        </div>
                                        <div class="col-lg-3 col-6 text-center">
                                            <span data-toggle="counter-up">16</span>
                                            <p>Schools</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>



            </div>
        </div>
    </section><!-- #intro -->

    <main id="main">

        <!--==========================
      About Us Section
    ============================-->
        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>About Us</h3>
                    <p>We have been providing training, language and research assistance since 2013. Officially, we have
                        operated under CV Semesta Raya since 2015. In July 2024, we transitioned to PT Semesta Laras
                        Basa. To date, we have completed over 25,000 translation and proofreading projects for
                        individuals, companies, state-owned enterprises, and both local and international clients.</p>
                </header>

                <div class="row about-cols" style="justify-content: center">


                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('new/img/about-vision.jpg') }}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Vision</a></h2>
                            <p>
                                The vision of PT Semesta Laras Basa is to become a center for language and research
                                services at both national and international levels.
                            </p>
                        </div>
                    </div>

                    {{-- <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('new/img/about-plan.jpg') }}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Plan</a></h2>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                beatae vitae dicta sunt explicabo.
                            </p>
                        </div>
                    </div> --}}

                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('new/img/about-mission.jpg') }}" alt=""
                                    class="img-fluid">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Mission</a></h2>
                            <p>
                                The mission of PT. Semesta Laras Basa is to provide reliable language services, deliver
                                innovative language and cultural training, build partnerships and collaborations with
                                various domestic and international institutions, and offer services in the development
                                of various fields of research and scientific publication.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #about -->

        <!--==========================
      Services Section
    ============================-->
        <section id="services">
            <div class="container">

                <header class="section-header wow fadeInUp">
                    <h3>Services</h3>
                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant
                        vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta
                        zanos paradigno tridexa panatarel.</p>
                </header>

                <div class="row">

                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat tarad limino ata</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-paper-outline"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-people-outline"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                            tempore, cum soluta nobis est eligendi</p>
                    </div>

                </div>

            </div>
        </section><!-- #services -->

        <!--==========================
      Call To Action Section
    ============================-->
        <section id="call-to-action" class="wow fadeIn">
            <div class="container text-center">
                <h3>Call To Action</h3>
                <p> Partner with PT Semesta Laras Basa for reliable language services, innovative training solutions,
                    and strong international collaborations. Elevate your projects with our expertise in language and
                    research, tailored to meet both national and global standards.</p>
                <a class="cta-btn" href="#contact">Message Us</a>
            </div>
        </section><!-- #call-to-action -->

        <!--==========================
      Portfolio Section
    ============================-->
        <section id="portfolio" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">Our Portfolio</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/app1.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/app1.jpg') }}" data-lightbox="portfolio"
                                    data-title="App 1" class="link-preview" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">App 1</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/web3.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/web3.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Web 3" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Web 3</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/app2.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/app2.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="App 2" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">App 2</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/card2.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/card2.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Card 2" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Card 2</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/web2.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/web2.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Web 2" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Web 2</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/app3.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/app3.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="App 3" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">App 3</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/card1.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/card1.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Card 1" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Card 1</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/card3.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/card3.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Card 3" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Card 3</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/web1.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/web1.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Web 1" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Web 1</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #portfolio -->

        <!--==========================
      Clients Section
    ============================-->
        <section id="clients" class="wow fadeInUp">
            <div class="container">

                {{-- GOVERNMENT --}}
                <header class="section-header">
                    <h3>Government Clients</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                    <img src="{{ asset('new/img/clients/bappeda.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/kai.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/lapan.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/zakat.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/aseansummer.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/pemkotbandung.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/south-african-youth-day.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/kemenparekraf.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/perhubungan.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/midc.png') }}" alt=""> --}}
                    <img src="{{ asset('new/img/clients/bappenas.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/pertamina.png') }}" alt="">
                </div>

                {{-- COMPANY --}}
                <header class="section-header">
                    <h3>Company Clients</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                    <img src="{{ asset('new/img/clients/client-1.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-2.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-3.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-4.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-5.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-6.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-7.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-8.png') }}" alt="">
                </div>

                {{-- UNIVERSITY --}}
                <header class="section-header">
                    <h3>University Clients</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                    <img src="{{ asset('new/img/clients/client-1.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-2.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-3.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-4.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-5.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-6.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-7.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-8.png') }}" alt="">
                </div>

                {{-- SCHOOL --}}
                <header class="section-header">
                    <h3>School Clients</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                    <img src="{{ asset('new/img/clients/client-1.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-2.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-3.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-4.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-5.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-6.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-7.png') }}" alt="">
                    <img src="{{ asset('new/img/clients/client-8.png') }}" alt="">
                </div>


            </div>
        </section><!-- #clients -->

        <!--==========================
      Clients Section
    ============================-->
        <section id="testimonials" class="section-bg wow fadeInUp">
            <div class="container">

                <header class="section-header">
                    <h3>Testimonials</h3>
                </header>

                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item">
                        <img src="{{ asset('new/img/testimonial-1.jpg') }}" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <p>
                            <img src="{{ asset('new/img/quote-sign-left.png') }}" class="quote-sign-left"
                                alt="">
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            <img src="{{ asset('new/img/quote-sign-right.png') }}" class="quote-sign-right"
                                alt="">
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="{{ asset('new/img/testimonial-2.jpg') }}" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <p>
                            <img src="{{ asset('new/img/quote-sign-left.png') }}" class="quote-sign-left"
                                alt="">
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                            eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                            culpa.
                            <img src="{{ asset('new/img/quote-sign-right.png') }}" class="quote-sign-right"
                                alt="">
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="{{ asset('new/img/testimonial-3.jpg') }}" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <p>
                            <img src="{{ asset('new/img/quote-sign-left.png') }}" class="quote-sign-left"
                                alt="">
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                            minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <img src="{{ asset('new/img/quote-sign-right.png') }}" class="quote-sign-right"
                                alt="">
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="{{ asset('new/img/testimonial-4.jpg') }}" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <p>
                            <img src="{{ asset('new/img/quote-sign-left.png') }}" class="quote-sign-left"
                                alt="">
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                            velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                            veniam.
                            <img src="{{ asset('new/img/quote-sign-right.png') }}" class="quote-sign-right"
                                alt="">
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="{{ asset('new/img/testimonial-5.jpg') }}" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <p>
                            <img src="{{ asset('new/img/quote-sign-left.png') }}" class="quote-sign-left"
                                alt="">
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
                            enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                            nisi cillum quid.
                            <img src="{{ asset('new/img/quote-sign-right.png') }}" class="quote-sign-right"
                                alt="">
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- #testimonials -->

        <!--==========================
      Team Section
    ============================-->
        <section id="team">
            <div class="container">
                <div class="section-header wow fadeInUp">
                    <h3>Team</h3>
                    <p>Co - Founder</p>
                </div>

                <div class="row" style="justify-content: center">
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="{{ asset('new/img/team/cofounder_riyadi.png') }}" class="img-fluid"
                                alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Riyadi Maulana T.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="{{ asset('new/img/team/cofounder_indiana.png') }}" class="img-fluid"
                                alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Indiana Ayu Alwasilah</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="padding-top: 50px">
                <div class="section-header wow fadeInUp">
                    <p>Language Assistant Team</p>
                </div>

                <div class="row" style="justify-content: center">
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="{{ asset('new/img/team/la_irfan.png') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Muhammad Irfan Ferlanda, M.Pd.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="{{ asset('new/img/team/la_nurkarunia.png') }}" class="img-fluid"
                                alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Nur Karunia, S,Pd., M.Hum.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="{{ asset('new/img/team/la_indah.png') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Indah Rahmawati, M.Pd.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="justify-content: center">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="{{ asset('new/img/team/la_robi.png') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Robi Dafit Hidayat, S.Pd.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="member">
                            <img src="{{ asset('new/img/team/la_rafy.png') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Muhamad Rafy Adityana S.S.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="padding-top: 50px">
                <div class="section-header wow fadeInUp">
                    <p>Research Assistant Team</p>
                </div>

                <div class="row" style="justify-content: center">
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="{{ asset('new/img/team/ra_eri.png') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Prof. Eri Kurniawan, S.Pd., M.A., Ph.D.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="{{ asset('new/img/team/ra_julia.png') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Prof. Dr. J. Julia, S.Pd., M.Pd.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="{{ asset('new/img/team/ra_tedi.png') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Dr. Tedi Supriyadi S.H.I.,M.Ag</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="padding-top: 50px">
                <div class="section-header wow fadeInUp">
                    <p>Training Team</p>
                </div>

                <div class="row" style="justify-content: center">
                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="{{ asset('new/img/team/t_erik.png') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Erik Yuda Pratama, M.Pd.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="{{ asset('new/img/team/t_imanur.png') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Imanur Fikri Nugraha, M.Pd.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="{{ asset('new/img/team/t_riska.png') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Riska Maharlika, S.Pd.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="{{ asset('new/img/team/t_syiffa.png') }}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Syiffa A. Gantika, S.Pd.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #team -->

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h3>Contact Us</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>

                <div class="mb-4">
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBu2kYMRfZ7A4HuEAr4HRmkac0SI0MTrH4&q=-6.883177,107.5792616"
                        frameborder="0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <!-- End Google Maps -->

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <address>21 Terusan Cibogo Atas</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Phone Number</h3>
                            {{-- <p><a href="tel:+6281320045767">+62 813-2004-5767</a></p> --}}
                            <p>+62 813-2004-5767</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:hello@larasbasa.com"
                                    style="text-decoration: none">hello@larasbasa.com</a></p>
                        </div>
                    </div>

                </div>

                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" data-rule="minlen:4"
                                data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>
        </section><!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>BizPage</h3>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet
                            proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam
                            illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase
                            seza.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="{{ asset('new/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('new/lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('new/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('new/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('new/lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ asset('new/lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ asset('new/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('new/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('new/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('new/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('new/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('new/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('new/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('new/contactform/contactform.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('new/js/main.js') }}"></script>

</body>

</html>
