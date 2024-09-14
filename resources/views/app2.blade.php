<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT. Semesta Laras Basa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('new/img/logo-title-2.png') }}" rel="icon">
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

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left">
                <a href="#intro" class="scrollto"><img src="{{ asset('new/img/logo-2.png') }}" alt="" title="" /></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <li><a href="#about">About Us</a></li>
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
                                <img src="{{ asset('new/img/about-mission2.jpg') }}" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Vision</a></h2>
                            <p>
                                Become a center for language and research services at both national and international levels.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('new/img/about-mission1.jpg') }}" alt=""
                                    class="img-fluid">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Missions</a></h2>
                            <ul>
                                <li>To deliver high-quality language solutions</li>
                                <li>To advance language and research excellence</li>
                                <li>To promote collaborative research and publications</li>
                            </ul>
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
                </header>

                <div class="row">
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-chatbubbles"></i></div>
                        <h4 class="title"><a href="">Language Assistant</a></h4>
                        <ul class="description">
                            <li>Translation</li>
                            <li>Proofreading</li>
                            <li>Interpreting</li>
                            <li>Bilingual Website Content Creator</li>
                            <li>Voice Over</li>
                            <li>Language Testing</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-flask"></i></div>
                        <h4 class="title"><a href="">Research Assistant</a></h4>
                        <p class="description">Our research assistant service provides expert support for your research needs, including data collection, analysis, and report writing. We offer tailored assistance to streamline your research process and ensure high-quality results.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-people"></i></div>
                        <h4 class="title"><a href="">Training</a></h4>
                        <ul class="description">
                            <li>Corporate in-House Training</li>
                            <li>School in-House Program</li>
                            <li>E-Learning</li>
                            <li>Public Speaking</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- #services -->

        <!--==========================
      Call To Action Section
    ============================-->
        <section id="call-to-action" class="wow fadeIn">
            <div class="container text-center">
                <h3>Call to Action</h3>
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
                            {{-- <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li> --}}
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/LB-1.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/LB-1.jpg') }}" data-lightbox="portfolio"
                                    data-title="Title" class="link-preview" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Title</a></h4>
                                <p>Desc</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/LB-2.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/LB-2.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Title" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Title</a></h4>
                                <p>Desc</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/LB-4.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/LB-4.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Title" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Title</a></h4>
                                <p>Desc</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/LB-3.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/LB-3.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Title" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Title</a></h4>
                                <p>Desc</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/LB-5.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/LB-5.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Title" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Title</a></h4>
                                <p>Desc</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/LB-6.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/LB-6.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Title" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Title</a></h4>
                                <p>Desc</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/LB-7.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/LB-7.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Title" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Title</a></h4>
                                <p>Desc</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/LB-8.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/LB-8.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Title" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Title</a></h4>
                                <p>Desc</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('new/img/portfolio/LB-9.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ asset('new/img/portfolio/LB-9.jpg') }}" class="link-preview"
                                    data-lightbox="portfolio" data-title="Title" title="Preview"><i
                                        class="ion ion-eye"></i></a>
                                <a href="#" class="link-details" title="More Details"><i
                                        class="ion ion-android-open"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#">Title</a></h4>
                                <p>Desc</p>
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
                    <a href="https://bappelitbang.bandung.go.id/v2/">
                        <img src="{{ asset('new/img/clients/gov/gov-bappeda.png') }}" alt="">
                    </a>
                    <a href="https://www.kai.id/">
                        <img src="{{ asset('new/img/clients/gov/gov-kai.png') }}" alt="">
                    </a>
                    <a href="https://jurnal.lapan.go.id/">
                        <img src="{{ asset('new/img/clients/gov/gov-lapan.png') }}" alt="">
                    </a>
                    <a href="https://www.wzwf.org/">
                        <img src="{{ asset('new/img/clients/gov/gov-zakat.png') }}" alt="">
                    </a>
                    <a href="https://www.milanurbanfoodpolicypact.org/mufpp-asean-summer-school/">
                        <img src="{{ asset('new/img/clients/gov/gov-aseansummer.png') }}" alt="">
                    </a>
                    <a href="https://www.bandung.go.id/">
                        <img src="{{ asset('new/img/clients/gov/gov-pemkotbandung.png') }}" alt="">
                    </a>
                    <a href="https://www.gov.za/news/events/commemorative-events/youth-day">
                        <img src="{{ asset('new/img/clients/gov/gov-south-african-youth-day.png') }}" alt="">
                    </a>
                    <a href="https://www.kemenparekraf.go.id/">
                        <img src="{{ asset('new/img/clients/gov/gov-kemenparekraf.png') }}" alt="">
                    </a>
                    <a href="https://dephub.go.id/">
                        <img src="{{ asset('new/img/clients/gov/gov-perhubungan.png') }}" alt="">
                    </a>
                    <a href="https://dephub.go.id/">
                        <img src="{{ asset('new/img/clients/gov/gov-midc.png') }}" alt="">
                    </a>
                    <a href="https://www.bappenas.go.id/">
                        <img src="{{ asset('new/img/clients/gov/gov-bappenas.png') }}" alt="">
                    </a>
                    <a href="https://pds.mypertamina.id/">
                        <img src="{{ asset('new/img/clients/gov/gov-pertamina.png') }}" alt="">
                    </a>
                </div>
                

                {{-- COMPANY --}}
                <header class="section-header">
                    <h3>Company Clients</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                    <a href="https://www.infomedia.co.id/">
                        <img src="{{ asset('new/img/clients/company/comp-infomedia.png') }}" alt="">
                    </a>
                    <a href="http://www.ultimosolution.com/">
                        <img src="{{ asset('new/img/clients/company/comp-ultimo.png') }}" alt="">
                    </a>
                    <a href="https://madinaquran.co.id/">
                        <img src="{{ asset('new/img/clients/company/comp-madina.png') }}" alt="">
                    </a>
                    <a href="https://www.geekseat.id/">
                        <img src="{{ asset('new/img/clients/company/comp-geekseat.png') }}" alt="">
                    </a>
                    <a href="https://www.vodjo.com/id/">
                        <img src="{{ asset('new/img/clients/company/comp-vodjo.png') }}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{ asset('new/img/clients/company/comp-kiper.png') }}" alt="">
                    </a>
                    <a href="https://quadranenergi.id/">
                        <img src="{{ asset('new/img/clients/company/comp-quadran.png') }}" alt="">
                    </a>
                    <a href="https://www.mininginsider.id/education/10278883651/profil-pt-kalimantan-energi-lestari-perusahaan-tambang-batu-bara-di-indonesia">
                        <img src="{{ asset('new/img/clients/company/comp-kel.png') }}" alt="">
                    </a>
                    <a href="https://mercuria.com/">
                        <img src="{{ asset('new/img/clients/company/comp-mercuria.png') }}" alt="">
                    </a>
                    <a href="https://www.instagram.com/rockspiderwall/">
                        <img src="{{ asset('new/img/clients/company/comp-rscw.png') }}" alt="">
                    </a>
                    <a href="https://www.tripaneer.com/">
                        <img src="{{ asset('new/img/clients/company/comp-tripaneer.png') }}" alt="">
                    </a>
                    <a href="https://g.co/kgs/G4yP9qc">
                        <img src="{{ asset('new/img/clients/company/comp-anindya.png') }}" alt="">
                    </a>
                    <a href="https://posindonesia.co.id/">
                        <img src="{{ asset('new/img/clients/company/comp-pos.png') }}" alt="">
                    </a>
                    <a href="https://persib.co.id/">
                        <img src="{{ asset('new/img/clients/company/comp-ptpbb.png') }}" alt="">
                    </a>
                    <a href="https://kwarsahexagon.co.id/">
                        <img src="{{ asset('new/img/clients/company/comp-hexagon.png') }}" alt="">
                    </a>
                    <a href="https://www.linkedin.com/company/pt-yakjin-jaya-indonesia">
                        <img src="{{ asset('new/img/clients/company/comp-yakjin.png') }}" alt="">
                    </a>
                    <a href="https://hariff.co.id/">
                        <img src="{{ asset('new/img/clients/company/comp-hariff.png') }}" alt="">
                    </a>
                    <a href="https://www.instagram.com/pt_ciptagrahaabadi/">
                        <img src="{{ asset('new/img/clients/company/comp-cga.png') }}" alt="">
                    </a>
                    <a href="https://pupuk-kujang.co.id/">
                        <img src="{{ asset('new/img/clients/company/comp-pupukkujang.png') }}" alt="">
                    </a>
                    <a href="https://www.gsp.co.id/">
                        <img src="{{ asset('new/img/clients/company/comp-gsp.png') }}" alt="">
                    </a>
                    <a href="https://www.sinkonaindonesia.com/">
                        <img src="{{ asset('new/img/clients/company/comp-sil.png') }}" alt="">
                    </a>
                    <a href="https://www.thermochem.com/our-company/indonesia-2/">
                        <img src="{{ asset('new/img/clients/company/comp-thermochem.png') }}" alt="">
                    </a>
                    <a href="https://tempatspa.com/listing/jawa-barat/bandung-3/spakeluarga/qenari-spa-bandung">
                        <img src="{{ asset('new/img/clients/company/comp-qenarispa.png') }}" alt="">
                    </a>
                    <a href="https://www.thetranshotel.com/">
                        <img src="{{ asset('new/img/clients/company/comp-transhotel.png') }}" alt="">
                    </a>
                </div>
                

                {{-- UNIVERSITY --}}
                <header class="section-header">
                    <h3>University Clients</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                    <a href="https://www.monash.edu/">
                        <img src="{{ asset('new/img/clients/univ/1.png') }}" alt="">
                    </a>
                    <a href="https://www.unsw.edu.au/">
                        <img src="{{ asset('new/img/clients/univ/2.png') }}" alt="">
                    </a>
                    <a href="https://nmu.edu/">
                        <img src="{{ asset('new/img/clients/univ/3.png') }}" alt="">
                    </a>
                    <a href="https://www.fju.edu.tw/indexEN.jsp">
                        <img src="{{ asset('new/img/clients/univ/4.png') }}" alt="">
                    </a>
                    <a href="http://www.utem.edu.my/">
                        <img src="{{ asset('new/img/clients/univ/5.png') }}" alt="">
                    </a>
                    <a href="https://www.upi.edu/">
                        <img src="{{ asset('new/img/clients/univ/6.png') }}" alt="">
                    </a>
                    <a href="https://www.unpad.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/7.png') }}" alt="">
                    </a>
                    <a href="https://www.itb.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/8.png') }}" alt="">
                    </a>
                    <a href="https://www.unikom.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/9.png') }}" alt="">
                    </a>
                    <a href="https://unisba.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/10.png') }}" alt="">
                    </a>
                    <a href="https://telkomuniversity.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/11.png') }}" alt="">
                    </a>
                    <a href="https://www.polban.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/12.png') }}" alt="">
                    </a>
                    <a href="https://www.unjani.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/13.png') }}" alt="">
                    </a>
                    <a href="https://situ2.unpas.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/14.png') }}" alt="">
                    </a>
                    <a href="https://www.ui.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/15.png') }}" alt="">
                    </a>
                    <a href="https://www.atmajaya.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/16.png') }}" alt="">
                    </a>
                    <a href="https://www.petra.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/17.png') }}" alt="">
                    </a>
                    <a href="https://isbi.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/18.png') }}" alt="">
                    </a>
                    <a href="https://www.poltekesos.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/19.png') }}" alt="">
                    </a>
                    <a href="https://unsil.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/20.png') }}" alt="">
                    </a>
                    <a href="https://www.ipb.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/21.png') }}" alt="">
                    </a>
                    <a href="https://binus.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/22.png') }}" alt="">
                    </a>
                    <a href="https://www.maranatha.edu/">
                        <img src="{{ asset('new/img/clients/univ/23.png') }}" alt="">
                    </a>
                    <a href="https://www.uny.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/24.png') }}" alt="">
                    </a>
                    <a href="https://trisakti.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/25.png') }}" alt="">
                    </a>
                    <a href="https://unpar.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/26.png') }}" alt="">
                    </a>
                    <a href="https://www.unj.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/27.png') }}" alt="">
                    </a>
                    <a href="https://www.its.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/28.png') }}" alt="">
                    </a>
                    <a href="https://uinsgd.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/29.png') }}" alt="">
                    </a>
                    <a href="https://www.ulbi.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/30.png') }}" alt="">
                    </a>
                    <a href="https://unri.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/31.png') }}" alt="">
                    </a>
                    <a href="https://unpam.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/32.png') }}" alt="">
                    </a>
                    <a href="https://www.unud.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/33.png') }}" alt="">
                    </a>
                    <a href="https://www.uta45jakarta.ac.id/">
                        <img src="{{ asset('new/img/clients/univ/34.png') }}" alt="">
                    </a>
                    <a href="https://www.ub.ac.id/id/">
                        <img src="{{ asset('new/img/clients/univ/35.png') }}" alt="">
                    </a>
                </div>
                

                {{-- SCHOOL --}}
                <header class="section-header">
                    <h3>School Clients</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                    <a href="https://www.smpdtbs.sch.id/">
                        <img src="{{ asset('new/img/clients/school/1.png') }}" alt="">
                    </a>
                    <a href="https://www.smkn7bandung.sch.id/">
                        <img src="{{ asset('new/img/clients/school/2.png') }}" alt="">
                    </a>
                    <a href="https://smkn5bandung.sch.id/">
                        <img src="{{ asset('new/img/clients/school/3.png') }}" alt="">
                    </a>
                    <a href="https://www.smk-kencana.sch.id/">
                        <img src="{{ asset('new/img/clients/school/4.png') }}" alt="">
                    </a>
                    <a href="https://smknasionalbandung.sch.id/">
                        <img src="{{ asset('new/img/clients/school/5.png') }}" alt="">
                    </a>
                    <a href="https://smkpasundan1bandung.sch.id/">
                        <img src="{{ asset('new/img/clients/school/6.png') }}" alt="">
                    </a>
                    <a href="http://smkpasundan1cianjur.sch.id/">
                        <img src="{{ asset('new/img/clients/school/7.png') }}" alt="">
                    </a>
                    <a href="https://www.smkpasundan2cianjur.sch.id/">
                        <img src="{{ asset('new/img/clients/school/8.png') }}" alt="">
                    </a>
                    <a href="https://smkbahagia.sch.id/">
                        <img src="{{ asset('new/img/clients/school/8.1.png') }}" alt="">
                    </a>
                    <a href="https://bpkpenabur.or.id/cities/bandung">
                        <img src="{{ asset('new/img/clients/school/9.png') }}" alt="">
                    </a>
                    <a href="https://smktelkom-bdg.sch.id/">
                        <img src="{{ asset('new/img/clients/school/10.png') }}" alt="">
                    </a>
                    <a href="https://sman9bdg.sch.id/">
                        <img src="{{ asset('new/img/clients/school/11.png') }}" alt="">
                    </a>
                    <a href="https://www.smasbpi1bdg.sch.id/">
                        <img src="{{ asset('new/img/clients/school/12.png') }}" alt="">
                    </a>
                    <a href="https://sman25kabtng.sch.id/">
                        <img src="{{ asset('new/img/clients/school/13.png') }}" alt="">
                    </a>
                    <a href="https://pgri109-tng.sch.id/">
                        <img src="{{ asset('new/img/clients/school/14.png') }}" alt="">
                    </a>
                    <a href="https://assyifa-boardingschool.sch.id/">
                        <img src="{{ asset('new/img/clients/school/15.png') }}" alt="">
                    </a>
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
                            <p><a href="whatsapp://send?text=Hello&phone=+628111323121">+62 811-1323-121</a></p>
                            {{-- <p>+62 813-2004-5767</p> --}}
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
                        <h3>Semesta Laras Basa</h3>
                        {{-- <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet
                            proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p> --}}
                    </div>

                    {{-- <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div> --}}

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            21 Terusan Cibogo Atas <br>
                            Sukawarna, Kec. Sukajadi, Kota Bandung, Jawa Barat 40164<br>
                            Indonesia <br>
                            <strong>Phone:</strong> +62 811-1323-121<br>
                            <strong>Email:</strong> hello@larasbasa.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>

                    {{-- <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam
                            illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase
                            seza.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div> --}}

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Laras Basa</strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://larasbasa.com/">Laras Basa Team</a>
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
