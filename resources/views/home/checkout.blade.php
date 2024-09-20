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

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="{{ asset('logo.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

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
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row">
                    <!-- Gambar Produk -->
                    <div class="col-md-6 mb-4">
                        <img class="img-fluid rounded shadow-sm"
                            src="{{ asset('../products/' . $product_details->image) }}"
                            alt="{{ $product_details->title }}">
                    </div>

                    <!-- Detail Produk -->
                    <div class="col-md-6">
                        <h1 class="mb-3">{{ $product_details->title }}</h1>
                        <h4 class="text-secondary mb-3">Category: {{ $product_details->category }}</h4>
                        <p class="mb-3">{{ $product_details->description }}</p>
                        <h4 class="text-primary mb-4">Price: Rp. {{ $product_details->price }}
                            {{ $product_details->duration }}</h4>

                        <button type="button" class="btn btn-info d-block w-100" id="pay-button">Pay Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Address<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Maharaja Housing Block R2 Depok, West Java</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+62 831-3590-0521</p>
                        <p><i class="fa fa-envelope me-3"></i>info@digiexpert.co.id</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social"
                                href="https://www.instagram.com/digiexpert.co.id/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social"
                                href="https://www.linkedin.com/company/digiexpert-co-id"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="{{ route('about') }}">About</a>
                        <a class="btn btn-link" href="{{ route('services') }}">Services</a>
                        <a class="btn btn-link" href="{{ route('products') }}">Products</a>
                        <a class="btn btn-link" href="{{ route('contact') }}">Contact</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('portfolio/design/Instagram/Thumbnail.webp') }}"
                                    alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('portfolio/design/Music_APP/Thumbnail.webp') }}"
                                    alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('portfolio/webdev/porto_webdev9.webp') }}"
                                    alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('portfolio/webdev/porto_webdev3.webp') }}"
                                    alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('portfolio/design/Trapin/Thumbnail.webp') }}"
                                    alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('portfolio/design/Dashboard/Thumbnail.webp') }}"
                                    alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p>Subscribe untuk mendapatkan harga promo hingga diskon 50% dari segala product kami </p>
                        <div class="position-relative w-100 mt-3">
                            @if (Route::has('login'))
                                @auth
                                    <form action="{{ route('subscribe_newsletter') }}" method="POST">
                                        @csrf
                                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
                                            value="{{ Auth::user()->email }}" style="height: 48px;" name="email"
                                            readonly>
                                        <button type="button"
                                            class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                                    </form>
                                @else
                                    <form action="{{ route('subscribe_newsletter') }}" method="POST">
                                        @csrf
                                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
                                            placeholder="Your Email" style="height: 48px;" name="email">
                                        <button type="button"
                                            class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                                    </form>
                                @endauth
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="{{ route('home') }}">Digiexpert</a>, All Right
                            Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="{{ route('login') }}">Login</a>
                                <a href="{{ route('register') }}">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i
                class="bi bi-arrow-up"></i></a>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('kebutuhan/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('kebutuhan/js/main.js') }}"></script>

    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}">
    </script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            snap.pay('{{ $order->snap }}', {
                onSuccess: function(result) {
                    Swal.fire({
                        title: 'Pembayaran Berhasil!',
                        text: 'Silahkan laporkan bukti pembayaran ke kami melalui WhatsApp untuk claim akun anda.',
                        icon: 'success',
                        confirmButtonText: 'Laporkan via WhatsApp'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            var whatsappMessage =
                                "Halo, saya ingin melaporkan pembayaran dengan ID Transaksi: {{ $order->order_id }}"
                            var whatsappUrl = "https://wa.me/6287886050392?text=" +
                                encodeURIComponent(whatsappMessage);
                            window.location.href = whatsappUrl;
                        }
                    });
                },
                onPending: function(result) {
                    Swal.fire({
                        title: 'Pembayaran Pending',
                        text: 'Pembayaran Anda sedang diproses, silahkan tunggu konfirmasi.',
                        icon: 'info',
                        confirmButtonText: 'Oke'
                    });
                },
                onError: function(result) {
                    Swal.fire({
                        title: 'Pembayaran Gagal!',
                        text: 'Terjadi kesalahan, silahkan coba lagi.',
                        icon: 'error',
                        confirmButtonText: 'Coba Lagi'
                    });
                }
            });
        };
    </script>
</body>

</html>
