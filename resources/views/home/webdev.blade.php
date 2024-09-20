@props(['count'])

@php
    $title = '';
    if (Request::routeIs('about')) {
        $title = 'About - Digiexpert';
    } elseif (Request::routeIs('services')) {
        $title = 'Services - Digiexpert';
    } elseif (Request::routeIs('services.webdev')) {
        $title = 'Web Development - Digiexpert';
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
        content="jasa pembuatan website, jasa maintenance website, webmaster terpercaya, pembuatan website professional, jasa website murah, jasa maintenance website cepat, layanan webmaster, jasa pembuatan website terbaik, jasa website terpercaya"
        name="keywords">
    <meta
        content="Kami menyediakan jasa pembuatan website professional serta jasa maintenance website atau webmaster yang terpercaya dan cepat. Solusi terbaik untuk bisnis online Anda."
        name="description">
    <meta name="robots" content="index,follow">

    <meta property="og:title" content="Jasa Pembuatan Website & Maintenance Website Professional">
    <meta property="og:description"
        content="Pembuatan website professional serta maintenance website atau webmaster yang terpercaya dan cepat. Kami siap memberikan solusi digital terbaik untuk bisnis Anda.">
    <meta property="og:image" content="{{ asset('logo.ico') }}">
    <meta property="og:url" content="https://www.digiexpert.co.id/service/webdev">
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
                            class="nav-item nav-link {{ Request::routeIs('services') ? 'active' : '' }}">Services</a>
                        <a href="{{ route('products') }}"
                            class="nav-item nav-link {{ Request::routeIs('products') ? 'active' : '' }}">Products</a>
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
                    <p class="section-title text-secondary justify-content-center"><span></span>Web
                        Development<span></span></p>
                    <h1 class="text-center mb-5">PORTFOLIO</h1>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item music wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/webdev/porto_webdev1.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/webdev/porto_webdev1.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Web Development</p>
                                <h5 class="lh-base mb-0">Login Page
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item instagram wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/webdev/porto_webdev2.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/webdev/porto_webdev2.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Web Development</p>
                                <h5 class="lh-base mb-0">Restaurant Landing Page</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item trapin wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('portfolio/webdev/porto_webdev3.webp') }}"
                                    alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/webdev/porto_webdev3.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Web Development</p>
                                <h5 class="lh-base mb-0">Quotes Page
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item trapin wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid custom-img"
                                    src="{{ asset('portfolio/webdev/porto_webdev4.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/webdev/porto_webdev4.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Web Development</p>
                                <h5 class="lh-base mb-0">Teams Landing Page
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item instagram wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px;" class="img-fluid w-100"
                                    src="{{ asset('portfolio/webdev/porto_webdev5.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/webdev/porto_webdev5.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Web Development</p>
                                <h5 class="lh-base mb-0">School Landing Page</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item music wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/webdev/porto_webdev6.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/webdev/porto_webdev6.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Web Development </p>
                                <h5 class="lh-base mb-0">School Web</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item dashboard wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/webdev/porto_webdev7.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/webdev/porto_webdev7.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Web Development</p>
                                <h5 class="lh-base mb-0">Market Landing Page</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item dashboard wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/webdev/porto_webdev8.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/webdev/porto_webdev8.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Web Development</p>
                                <h5 class="lh-base mb-0">Oil & Gas Landing Page</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item dashboard wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/webdev/porto_webdev9.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/webdev/porto_webdev9.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Web Development</p>
                                <h5 class="lh-base mb-0">Oil & Gas Landing Page</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item dashboard wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/webdev/porto_webdev10.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/webdev/porto_webdev10.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Web Development</p>
                                <h5 class="lh-base mb-0">LNG Landing Page</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item dashboard wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 210px" class="img-fluid w-100"
                                    src="{{ asset('portfolio/webdev/porto_webdev11.webp') }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="{{ asset('portfolio/webdev/porto_webdev11.webp') }}"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Web Development</p>
                                <h5 class="lh-base mb-0">Oil & Gas Landing Page</a>
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
                            What technologies we use?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We always choose the most appropriate technology for each project. JavaScript and PHP are
                            our main programming languages. We use Laravel and Wordpress to create content management
                            systems (sometimes using ready-made content management systems like Headless CMS) and modern
                            frameworks like React.js & Next.js. We create visual mockups of projects using Figma.

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            What do i need to know before you contacting us?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The most important thing to know is what you want to achieve. Why do you need this software?
                            What should it do? Having a clear vision is very important when ordering a software
                            application. You don't want to spend months developing it with us without knowing exactly
                            what you need. If you have no experience in app development, don't hesitate to contact us.
                            We'll be happy to help you get started, building a project from scratch is nothing new to
                            us.

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            Is my website 100% safe from digital attacks?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Is my website 100% safe from digital attacks?
                            While Digiexpert takes website security very seriously and implements various best practices
                            to protect your site, it's important to understand that no website is guaranteed to be 100%
                            safe from digital attacks. Cyber threats are constantly evolving, and new vulnerabilities
                            can arise.<br><br>
                            However, we are committed to minimizing risk and protecting your website through various
                            measures:<br><br>
                            <b>Secure Coding Practices:</b> Our development team follows strict coding standards to
                            prevent
                            vulnerabilities that could be exploited by hackers.<br>
                            <b>Regular Updates and Patching:</b> We keep your website software, plugins, and themes up
                            to date
                            to address known security holes.<br>
                            <b>Web Application Firewall (WAF):</b> We can implement a WAF to filter out malicious
                            traffic and
                            block common attack patterns.<br>
                            <b>Security Audits and Monitoring:</b> We can perform periodic security audits and monitor
                            your
                            website for suspicious activity.<br>
                            <b>Backups:</b> We keep regular backups of your website so that we can restore it quickly in
                            the
                            event of a successful attack.<br><br>
                            By working with Digiexpert, you can rest assured that your website security is a top
                            priority. We will take proactive steps to protect your site and data, and we will respond
                            quickly and effectively in the event of a security incident.

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
