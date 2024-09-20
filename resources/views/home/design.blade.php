@props(['count'])

@php
    $title = '';
    if (Request::routeIs('about')) {
        $title = 'About - Digiexpert';
    } elseif (Request::routeIs('services')) {
        $title = 'Services - Digiexpert';
    } elseif (Request::routeIs('services.design')) {
        $title = 'Design - Digiexpert';
    } elseif (Request::routeIs('products')) {
        $title = 'Products - Digiexpert';
    } elseif (Request::routeIs('products.gpt')) {
        $title = 'Chat GPT - Digiexpert';
    }

    $hero = '';
    if (Request::routeIs('about')) {
        $hero = 'About Us';
    } elseif (Request::routeIs('services')) {
        $hero = 'Services';
    } elseif (Request::routeIs('products')) {
        $hero = 'Products';
    } elseif (Request::routeIs('products.gpt')) {
        $hero = 'Chat GPT';
    }

    $bawahhero = '';
    if (Request::routeIs('about')) {
        $bawahhero = 'About';
    } elseif (Request::routeIs('services')) {
        $bawahhero = 'Services';
    } elseif (Request::routeIs('products')) {
        $bawahhero = 'Products';
    } elseif (Request::routeIs('products.gpt')) {
        $bawahhero = 'GPT';
    } elseif (Request::routeIs('services.design')) {
        $bawahhero = 'Design';
    }

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="jasa desain, jasa desain murah, jasa desain terpercaya, jasa desain professional, desain brosur, desain logo, desain banner, desain flowchart, jasa desain grafis, desain profesional"
        name="keywords">
    <meta
        content="Kami menyediakan jasa desain murah, terpercaya, dan professional. Layanan kami mencakup desain brosur, logo, banner, dan flowchart untuk kebutuhan bisnis Anda.'"
        name="description">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Jasa Desain Murah & Professional - Brosur, Logo, Banner, Flowchart'">
    <meta property="og:description"
        content="Kami menawarkan jasa desain murah dan terpercaya, termasuk desain brosur, logo, banner, dan flowchart. Solusi desain profesional untuk kebutuhan bisnis Anda.'">
    <meta property="og:image" content="{{ asset('logo.ico') }}">
    <meta property="og:url" content="https://www.digiexpert.co.id/service/design">
    <meta property="og:type" content="website">

    <link href="{{ asset('logo.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('kebutuhan/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('kebutuhan/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('kebutuhan/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('kebutuhan/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('kebutuhan/css/style.css') }}" rel="stylesheet">
    <style>
        .accordion-button {
            background-color: #FFB74D;
            /* Warna oranye cerah */
            color: #fff;
            font-weight: bold;
            border-radius: 5px;
        }

        .accordion-button:not(.collapsed) {
            color: #333;
            background-color: #FF9800;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .accordion-item {
            border: none;
            margin-bottom: 15px;
        }

        .accordion-body {
            background-color: #FFF3E0;
            border-left: 3px solid #FF9800;
            padding: 20px;
            border-radius: 0 5px 5px 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .accordion-button:focus {
            box-shadow: none;
            border: none;
        }

        .custom-img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="container-xxl position-relative p-0">
            @props(['count'])

            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"></h1>
                    <img src="{{ asset('kebutuhan/img/logo.webp') }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('home') }}"
                            class="nav-item nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('about') }}"
                            class="nav-item nav-link {{ Request::routeIs('about') ? 'active' : '' }}">About</a>
                        <a href="{{ route('services') }}"
                            class="nav-item nav-link {{ Request::routeIs('services') ? 'active' : '' }}">Service</a>
                        <a href="{{ route('products') }}"
                            class="nav-item nav-link {{ Request::routeIs('products') ? 'active' : '' }}">Product</a>
                    </div>
                    @if (Route::has('login'))
                        @auth
                            <div class="d-flex align-items-center mt-3 mt-lg-0">
                                <a href="{{ route('myorders') }}" class="btn rounded-pill py-2 px-4 ms-3">Orders</a>
                                <a class="btn rounded-pill py-2 px-4 ms-3" href="{{ route('profile.edit') }}">Profile</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <input type="submit" class="btn rounded-pill py-2 px-4 ms-3" value="Logout">
                                </form>
                            </div>
                        @else
                            <div class="d-flex align-items-center mt-3 mt-lg-0">
                                <a href="{{ route('login') }}" class="btn rounded-pill py-2 px-4 ms-3">Login</a>
                                <a href="{{ route('register') }}" class="btn rounded-pill py-2 px-4 ms-3">Register</a>
                            </div>
                        @endauth
                    @endif
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">{{ $hero }}</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white"
                                            href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">
                                        {{ $bawahhero }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our
                        Projects<span></span></p>
                    <h1 class="text-center mb-5">Portfolio</h1>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="mx-2 active" data-filter="*">All</li>
                            <li class="mx-2" data-filter=".trapin">Trapin</li>
                            <li class="mx-2" data-filter=".music">Music APP UI</li>
                            <li class="mx-2" data-filter=".instagram">Instagram Redesign</li>
                            <li class="mx-2" data-filter=".dashboard">Dashboard</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item music wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/design/Music_APP/Thumbnail.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/design/Music_APP/Thumbnail.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Music App UI Design
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item instagram wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/design/Instagram/Full design.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/design/Instagram/Full design.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Instaram.com - UI Redesign</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item trapin wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100"
                                    src="{{ asset('portfolio/design/Trapin/Thumbnail.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/design/Trapin/Thumbnail.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Trapin - Landing Page Design
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item trapin wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid custom-img"
                                    src="{{ asset('portfolio/design/Trapin/Thumbnail2.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/design/Trapin/Thumbnail2.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Trapin - Landing Page Design
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item instagram wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px;" class="img-fluid w-100"
                                    src="{{ asset('portfolio/design/Instagram/Thumbnail.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/design/Instagram/Thumbnail.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Instaram.com - UI Redesign</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item music wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/design/Music_APP/Full design.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/design/Music_APP/Full design.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Music App UI Design</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item flyer wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/design/Flyer/FLAYER-RAMADHAN.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/design/Flyer/FLAYER-RAMADHAN.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Flayer UI Design</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item dashboard wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/design/Dashboard/Thumbnail.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/design/Dashboard/Thumbnail.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Dashboard UI Design</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item flyer wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/design/Flyer/FLAYER-SEDEKAH.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/design/Flyer/FLAYER-SEDEKAH.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Flayer UI Design</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5 px-lg-5">
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            What is our offering for?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Whether you're a corporation, business, start-up, non-profit organization or individual, we
                            can help. All clients looking for outsourcing IT specialists and high-quality IT services in
                            the areas of digital design, maintenance, and web application development can take advantage
                            of our offerings.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                            What apps do we use for UI/UX
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We use Figma, Adobe XD, Adobe Photoshop & Illustrator, Framer.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            What digital design services does Digiexpert offer?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            1. Logo Design: We create unique and memorable logos that capture the essence of your brand
                            and
                            resonate with your target audience. <br>
                            2. Website Design: We create visually appealing and user-friendly website designs that align
                            with your brand identity and business goals.<br>
                            3. Mobile App Design: We design intuitive and engaging user interfaces for mobile apps that
                            provide a seamless user experience.<br>
                            4. Branding & Identity Design: We develop a comprehensive brand strategy and create visual
                            assets such as color palettes, typography, and brand guidelines to ensure consistency across
                            all touchpoints.<br>
                            5. Marketing & Advertising Design: We design compelling graphics and visuals for marketing
                            campaigns, social media posts, and online ads to drive engagement and conversions.<br>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            How can i order design services
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            1. You can reach us at our whatsapp: <a href="https://wa.me/6287886050392">+62
                                878-8605-0392</a> or at our email
                            order@digiexpert.co.id.<br>
                            2. Tell us what you want and what kind of design you want, we will arrange the price based
                            on your request.<br>
                            3. We will immediately carry out your request after you pay the fee that we provide at the
                            beginning of the agreement.<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-home-footer></x-home-footer>


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('kebutuhan/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/lib/lightbox/js/lightbox.min.js') }}"></script>

    <script src="{{ asset('kebutuhan/js/main.js') }}"></script>
</body>

</html>
