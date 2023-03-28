<!DOCTYPE html>
<html lang="es-MX" dir="ltr">

    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Yummy</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Yummy
    * Updated: Mar 10 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    </head>

    <body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('img/logo.png') }}" alt="">
            <h1>Yummy<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a href="#hero">Inicio</a></li>
            <li><a href="#about">Acerca</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#events">Eventos</a></li>
            <li><a href="#chefs">Chefs</a></li>
            <li><a href="#gallery">Galeria</a></li>
            <li><a href="#rateme">Calificar DEMO</a></li>
            </ul>
        </nav><!-- .navbar -->

        <a class="btn-book-a-table" href="#book-a-table">Reservar una mesa</a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
            <h2 data-aos="fade-up">Disfruta tu comida <b>deliciosa y sana</b></h2>
            <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                <a href="#book-a-table" class="btn-book-a-table">Reservar una mesa</a>
                <a href="https://www.youtube.com/watch?v=ZRQeBKTbzYk" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Ver video</span></a>
            </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
            <img src="{{ asset('img/hero-img.png') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
            </div>
        </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Acerca de nosotros</h2>
            <p>Aprende mas <span>de nosotros</span></p>
            </div>

            <div class="row gy-4">
            <div class="col-lg-7 position-relative about-img" style="background-image: url(/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
                <div class="call-us position-absolute">
                <h4>Reserva una mesa</h4>
                <p>+52 5532 9820 57</p>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                </p>

                <div class="position-relative mt-4">
                    <img src="{{ asset('img/about-2.jpg') }}" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=ZRQeBKTbzYk" class="glightbox play-btn"></a>
                </div>
                </div>
            </div>
            </div>

        </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="why-box">
                <h3>Porque elegir Yummy?</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
                </p>
                <div class="text-center">
                    <a href="#" class="more-btn">Aprender mas <i class="bx bx-chevron-right"></i></a>
                </div>
                </div>
            </div><!-- End Why Box -->

            <div class="col-lg-8 d-flex align-items-center">
                <div class="row gy-4">

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Corporis voluptates officia eiusmod</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-gem"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-inboxes"></i>
                    <h4>Labore consequatur incidid dolore</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                </div><!-- End Icon Box -->

                </div>
            </div>

            </div>

        </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="zoom-out">

            <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clientes</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Proyectos</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                <p>Horas de atencion</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                <p>Trabajadores</p>
                </div>
            </div><!-- End Stats Item -->

            </div>

        </div>
        </section><!-- End Stats Counter Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Nuestro menu</h2>
            <p>Ve el <span>menu de Yummy</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

            <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                <h4>Entradas</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                <h4>Desayunos</h4>
                </a><!-- End tab nav item -->

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                <h4>Comidas</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                <h4>Cenas</h4>
                </a>
            </li><!-- End tab nav item -->

            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

            <div class="tab-pane fade active show" id="menu-starters">

                <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Entradas</h3>
                </div>

                <div class="row gy-5">

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-1.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Magnam Tiste</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $5.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-2.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Aut Luia</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $14.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-3.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Est Eligendi</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $8.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-4.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Eos Luibusdam</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $12.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-5.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Eos Luibusdam</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $12.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-6.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Laboriosam Direva</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $9.95
                    </p>
                </div><!-- Menu Item -->

                </div>
            </div><!-- End Starter Menu Content -->

            <div class="tab-pane fade" id="menu-breakfast">

                <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Desayunos</h3>
                </div>

                <div class="row gy-5">

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-1.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Magnam Tiste</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $5.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-2.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Aut Luia</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $14.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-3.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Est Eligendi</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $8.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-4.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Eos Luibusdam</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $12.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-5.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Eos Luibusdam</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $12.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-6.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Laboriosam Direva</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $9.95
                    </p>
                </div><!-- Menu Item -->

                </div>
            </div><!-- End Breakfast Menu Content -->

            <div class="tab-pane fade" id="menu-lunch">

                <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Comidas</h3>
                </div>

                <div class="row gy-5">

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-1.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Magnam Tiste</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $5.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-2.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Aut Luia</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $14.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-3.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Est Eligendi</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $8.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-4.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Eos Luibusdam</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $12.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-5.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Eos Luibusdam</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $12.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-6.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Laboriosam Direva</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $9.95
                    </p>
                </div><!-- Menu Item -->

                </div>
            </div><!-- End Lunch Menu Content -->

            <div class="tab-pane fade" id="menu-dinner">

                <div class="tab-header text-center">
                <p>Menu</p>
                <h3>Cenas</h3>
                </div>

                <div class="row gy-5">

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-1.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Magnam Tiste</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $5.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-2.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Aut Luia</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $14.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-3.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Est Eligendi</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $8.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-4.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Eos Luibusdam</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $12.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-5.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Eos Luibusdam</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $12.95
                    </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                    <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="{{ asset('img/menu/menu-item-6.png') }}" class="menu-img img-fluid" alt=""></a>
                    <h4>Laboriosam Direva</h4>
                    <p class="ingredients">
                    Lorem, deren, trataro, filede, nerada
                    </p>
                    <p class="price">
                    $9.95
                    </p>
                </div><!-- Menu Item -->

                </div>
            </div><!-- End Dinner Menu Content -->

            </div>

        </div>
        </section><!-- End Menu Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Testimonios</h2>
            <p>Que dicen ellos <span>acerca de nosotros</span></p>
            </div>

            <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Fernando Sebastian Maldad</h3>
                        <h4>Programador</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="{{ asset('img/friends/fer.jpg') }}" class="img-fluid testimonial-img" alt="">
                    </div>
                    </div>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Jade Gaminio</h3>
                        <h4>Empresaria</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="{{ asset('img/friends/jade.jpg') }}" class="img-fluid testimonial-img" alt="">
                    </div>
                    </div>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Osvaldo Colon de Sebastian</h3>
                        <h4>Ingeniero</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="{{ asset('img/friends/osva.jpg') }}" class="img-fluid testimonial-img" alt="">
                    </div>
                    </div>
                </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3>Luis Alberto Attack</h3>
                        <h4>Hacker</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="{{ asset('img/friends/pollo.jpg') }}" class="img-fluid testimonial-img" alt="">
                    </div>
                    </div>
                </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
            </div>

        </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
        <div class="container-fluid" data-aos="fade-up">

            <div class="section-header">
            <h2>Eventos</h2>
            <p>Comparte <span>tus momentos</span> es nuestro restaurante</p>
            </div>

            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(/img/events-1.jpg)">
                <h3>Fiestas personalizadas</h3>
                <div class="price align-self-start">$99</div>
                <p class="description">
                    Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
                </p>
                </div><!-- End Event item -->

                <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(/img/events-2.jpg)">
                <h3>Fiestas privadas</h3>
                <div class="price align-self-start">$289</div>
                <p class="description">
                    In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
                </p>
                </div><!-- End Event item -->

                <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(/img/events-3.jpg)">
                <h3>Aniversarios</h3>
                <div class="price align-self-start">$499</div>
                <p class="description">
                    Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
                </p>
                </div><!-- End Event item -->

            </div>
            <div class="swiper-pagination"></div>
            </div>

        </div>
        </section><!-- End Events Section -->

        <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Chefs</h2>
            <p>Si no es para toda la vida, <span>es para el paladar.</span></p>
            </div>

            <div class="row gy-4">

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="chef-member">
                <div class="member-img">
                    <img src="{{ asset('img/chefs/chefs-3.jpg') }}" class="img-fluid" alt="">
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info">
                    <h4>Uriel Salatiel</h4>
                    <span>Cheff</span>
                    <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                </div>
                </div>
            </div><!-- End Chefs Member -->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="chef-member">
                <div class="member-img">
                    <img src="{{ asset('img/chefs/chefs-2.jpg') }}" class="img-fluid" alt="">
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info">
                    <h4>Yamileth de los Santos</h4>
                    <span>Chef</span>
                    <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                </div>
                </div>
            </div><!-- End Chefs Member -->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="chef-member">
                <div class="member-img">
                    <img src="{{ asset('img/chefs/chefs-1.jpg') }}" class="img-fluid" alt="">
                    <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info">
                    <h4>Enrique Gonzales</h4>
                    <span>Chef</span>
                    <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                </div>
                </div>
            </div><!-- End Chefs Member -->

            </div>

        </div>
        </section><!-- End Chefs Section -->

        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Reservar una mesa</h2>
            <p>Reserva <span>tu lugar</span> con nosotros</p>
            </div>

            <div class="row g-0">

            <div class="col-lg-4 reservation-img" style="background-image: url(/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

            <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                <form action="#" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefono" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <input type="text" name="date" class="form-control" id="date" placeholder="Fecha" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <input type="text" class="form-control" name="time" id="time" placeholder="Tiempo" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                    <input type="number" class="form-control" name="people" id="people" placeholder="# de personas" data-rule="minlen:1" data-msg="Por favor ingresa al menos una silla">
                    <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Mensaje"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Cargando</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Tu reservacion ha sido enviada, gracias!</div>
                </div>
                <div class="text-center"><button type="submit">Reservar una mesa</button></div>
                </form>
            </div><!-- End Reservation Form -->

            </div>

        </div>
        </section><!-- End Book A Table Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Galeria</h2>
            <p>Ve <span>nuestra galeria</span></p>
            </div>

            <div class="gallery-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="{{ asset('img/gallery/gallery-1.jpg') }}" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="{{ asset('img/gallery/gallery-2.jpg') }}" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="{{ asset('img/gallery/gallery-3.jpg') }}" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="{{ asset('img/gallery/gallery-4.jpg') }}" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="{{ asset('img/gallery/gallery-5.jpg') }}" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="{{ asset('img/gallery/gallery-6.jpg') }}" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="{{ asset('img/gallery/gallery-7.jpg') }}" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="{{ asset('img/gallery/gallery-8.jpg') }}" class="img-fluid" alt=""></a></div>
            </div>
            <div class="swiper-pagination"></div>
            </div>

        </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="rateme" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Calificar demo</h2>
            <p>Es importante? <span>Claro nos ayudas a mejorar</span></p>
            </div>

            <div class="mb-3">
                <img src="{{ asset('img/vector.jpg') }}" alt="" style="border:0; width: 100%; height: 350px;">
            </div><!-- End Google Maps -->

            <div class="row gy-4">

            <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                <i class="icon bi bi-map flex-shrink-0"></i>
                <div>
                    <h3>Nos ayudas a mejorar la UI</h3>
                </div>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                <i class="icon bi bi-envelope flex-shrink-0"></i>
                <div>
                    <h3>Nos ayudas a tomar mejores decisiones</h3>
                </div>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                <i class="icon bi bi-telephone flex-shrink-0"></i>
                <div>
                    <h3>Nos ayudas a ver la rentabilidad</h3>
                </div>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                <i class="icon bi bi-share flex-shrink-0"></i>
                <div>
                    <h3>Contribuyes con tu granito de arena</h3>
                </div>
                </div>
            </div><!-- End Info Item -->

            </div>

            <form action="{{ route('send_rate') }}" method="post" role="form" class="php-email-form p-3 p-md-4" id="form_rateme">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-xl-6 form-group">
                    <input type="text" name="complete_name" class="form-control" id="complete_name" placeholder="Nombre completo" required>
                    </div>
                    <div class="col-xl-6 form-group">
                    <input type="text" class="form-control" name="town" id="town" placeholder="Alcaldia" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="number" name="rate" id="rate" placeholder="Calificanos del 1 al 10" class="form-control" min="1" max="10">
                </div>
                <div class="text-center"><button type="submit">Mandar calificacion</button></div>
            </form><!--End Contact Form -->

        </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
                <h4>Direccion</h4>
                <p>
                Reforma 209 <br>
                CDMX<br>
                </p>
            </div>

            </div>

            <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
                <h4>Reservaciones</h4>
                <p>
                <strong>Telefono:</strong> +52 5532 9820 57<br>
                <strong>Correo electronico:</strong> info@example.com<br>
                </p>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
                <h4>Horas de apertura</h4>
                <p>
                <strong>Lunes-Sabado: 11:00 am - 00:00 am</strong><br>
                Domingo: Cerrado
                </p>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
            <h4>Siguenos</h4>
            <div class="social-links d-flex">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
            </div>

        </div>
        </div>

        <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Yummy</span></strong>. Todos los derechos reservados
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
            Desarrollado por <a href="#xzunun">el Jairs</a>
        </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <!-- <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script> -->

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

    </body>

</html>