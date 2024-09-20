@props(['count'])

@php
    $title = '';
    if (Request::routeIs('about')) {
        $title = 'About - Digiexpert';
    } elseif (Request::routeIs('services')) {
        $title = 'Services - Digiexpert';
    } elseif (Request::routeIs('products')) {
        $title = 'Products - Digiexpert';
    } elseif (Request::routeIs('products.gpt')) {
        $title = 'Chat GPT - Digiexpert';
    } elseif (Request::routeIs('products.spotify')) {
        $title = 'Spotify Premium - Digiexpert';
    } elseif (Request::routeIs('products.gpt.details')) {
        $title = 'Details Product - Digiexpert';
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
    } elseif (Request::routeIs('products.spotify')) {
        $hero = 'Spotify Premium';
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
    } elseif (Request::routeIs('products.spotify')) {
        $bawahhero = 'Spotify Premium';
    }

    $keyword = '';
    $description = '';
    $robots = '';

    $og_title = '';
    $og_description = '';
    $og_url = '';

    if (Request::routeIs('products.gpt')) {
        $keyword =
            'jual ChatGPT, ChatGPT, chatbot AI, jual chatbot, ChatGPT terbaik, ChatGPT murah, AI chatbot untuk bisnis, otomatisasi chatbot, AI canggih';
        $description =
            'Jual ChatGPT terbaik dengan fitur AI canggih. Tingkatkan efisiensi bisnis Anda dengan chatbot otomatis yang pintar dan mudah digunakan.';
        $robots = 'index, follow';
        $og_title = 'Jual ChatGPT - Chatbot AI Canggih untuk Bisnis';
        $og_description =
            'Dapatkan ChatGPT terbaik untuk bisnis Anda! Solusi chatbot berbasis AI untuk mempermudah komunikasi pelanggan dan otomatisasi layanan.';
        $og_url = 'https://www.digiexpert.co.id/product/gpt';
    }

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $keyword }}" name="keywords">
    <meta content="{{ $description }}" name="description">
    <meta content="{{ $robots }}" name="description">

    <meta property="og:title" content="{{ $og_title }}">
    <meta property="og:description" content="{{ $og_description }}">
    <meta property="og:image" content="{{ asset('logo.ico') }}">
    <meta property="og:url" content="{{ $og_url }}">
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
        .table-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            padding: 20px;
            background-color: #f9f9f9;
            /* Background warna lembut */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Efek bayangan */
        }

        .table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #17a2b8;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-weight: bold;
        }

        .table tbody td {
            background-color: #ffffff;
            /* Warna sel tabel */
            color: #333;
            padding: 15px;
            text-align: center;
            vertical-align: middle;
            border-bottom: 1px solid #ddd;
            /* Border bawah untuk pemisah */
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
            /* Efek hover */
            cursor: pointer;
        }

        .btn-info,
        .btn-secondary {
            padding: 8px 20px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn-info {
            background-color: #17a2b8;
            /* Warna tombol Checkout */
            color: white;
        }

        .btn-info:hover {
            background-color: #138496;
            /* Warna saat hover */
            color: #fff;
        }

        .btn-secondary {
            background-color: #ff6600;
            /* Warna tombol Delete */
            color: white;
        }

        .btn-secondary:hover {
            background-color: #e65c00;
            /* Warna saat hover */
            color: #fff;
        }

        @media (max-width: 768px) {
            .table-container {
                padding: 10px;
            }

            .table,
            .table thead,
            .table tbody,
            .table th,
            .table td,
            .table tr {
                display: block;
                width: 100%;
            }

            .table thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            .table tr {
                margin: 0 0 1rem 0;
                background: #fff;
                padding: 10px;
                border-radius: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .table td {
                border: none;
                padding: 10px;
                position: relative;
                text-align: left;
            }

            .table td:before {
                position: absolute;
                top: 10px;
                left: 10px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                content: attr(data-label);
                font-weight: bold;
                color: #007bff;
                /* Warna label pada mobile */
            }
        }

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
            <x-home-nav :count="$count"></x-home-nav>
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

        {{ $slot }}

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
