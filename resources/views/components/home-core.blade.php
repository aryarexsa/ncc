@php
    $keyword = '';
    $description = '';
    $robots = '';

    $og_title = '';
    $og_description = '';
    $og_url = '';

    if (Request::routeIs('home')) {
        $keyword =
            'Digiexpert, digital agency, digital marketing, agency digital marketing, jasa digital marketing, jasa pembuatan CV, jasa pembuatan cv termurah, jasa pembuatan cv proffesional, jual gpt murah, gpt, jasa pembuatan website murah, jasa pembuatan website terpercaya, jasa design murah, jasa design professional';
        $description =
            'Digital agency terpercaya yang menjual GPT Premium dan menyediakan jasa pembuatan website, desain, serta pembuatan CV profesional. Solusi terbaik untuk kebutuhan digital Anda.';
        $robots = 'index, follow';
        $og_title = 'Digital Agency - Jual GPT Premium & Jasa Pembuatan Website, Desain, CV';
        $og_description =
            'Kami menjual GPT Premium dan menyediakan berbagai jasa digital seperti pembuatan website, desain grafis, dan pembuatan CV. Solusi lengkap untuk kebutuhan digital Anda.';
        $og_url = 'https://www.digiexpert.co.id/';
    } elseif (Request::routeIs('dashboard')) {
        $keyword =
            'Digiexpert, digital agency, digital marketing, agency digital marketing, jasa digital marketing, jasa pembuatan CV, jasa pembuatan cv termurah, jasa pembuatan cv proffesional, jual gpt murah, gpt, jasa pembuatan website murah, jasa pembuatan website terpercaya, jasa design murah, jasa design professional';
        $description =
            'Digital agency terpercaya yang menjual GPT Premium dan menyediakan jasa pembuatan website, desain, serta pembuatan CV profesional. Solusi terbaik untuk kebutuhan digital Anda.';
        $robots = 'index, follow';
        $og_title = 'Digital Agency - Jual GPT Premium & Jasa Pembuatan Website, Desain, CV';
        $og_description =
            'Kami menjual GPT Premium dan menyediakan berbagai jasa digital seperti pembuatan website, desain grafis, dan pembuatan CV. Solusi lengkap untuk kebutuhan digital Anda.';
        $og_url = 'https://www.digiexpert.co.id/';
    } elseif (Request::routeIs('products.gpt')) {
        $keyword =
            'jual ChatGPT, ChatGPT, chatbot AI, jual chatbot, ChatGPT terbaik, ChatGPT murah, AI chatbot untuk bisnis, otomatisasi chatbot, AI canggih';
        $description =
            'Jual ChatGPT terbaik dengan fitur AI canggih. Tingkatkan efisiensi bisnis Anda dengan chatbot otomatis yang pintar dan mudah digunakan.';
        $robots = 'index, follow';
        $og_title = 'Jual ChatGPT - Chatbot AI Canggih untuk Bisnis';
        $og_description =
            'Dapatkan ChatGPT terbaik untuk bisnis Anda! Solusi chatbot berbasis AI untuk mempermudah komunikasi pelanggan dan otomatisasi layanan.';
        $og_url = 'https://www.digiexpert.co.id/product/gpt';
    } elseif (Request::routeIs('services.webdev')) {
        $keyword =
            'jasa pembuatan website, jasa maintenance website, webmaster terpercaya, pembuatan website professional, jasa website murah, jasa maintenance website cepat, layanan webmaster, jasa pembuatan website terbaik, jasa website terpercaya';
        $description =
            'Kami menyediakan jasa pembuatan website professional serta jasa maintenance website atau webmaster yang terperca   ya dan cepat. Solusi terbaik untuk bisnis online Anda.';
        $robots = 'index,follow';
        $og_title = 'Jasa Pembuatan Website & Maintenance Website Professional';
        $og_description =
            'Pembuatan website professional serta maintenance website atau webmaster yang terpercaya dan cepat. Kami siap memberikan solusi digital terbaik untuk bisnis Anda.';
        $og_url = 'https://www.digiexpert.co.id/service/webdev';
    } elseif (Request::routeIs('services.design')) {
        $keyword =
            'jasa desain, jasa desain murah, jasa desain terpercaya, jasa desain professional, desain brosur, desain logo, desain banner, desain flowchart, jasa desain grafis, desain profesional';
        $description =
            'Kami menyediakan jasa desain murah, terpercaya, dan professional. Layanan kami mencakup desain brosur, logo, banner, dan flowchart untuk kebutuhan bisnis Anda.';
        $robots = 'index, follow';
        $og_title = 'Jasa Desain Murah & Professional - Brosur, Logo, Banner, Flowchart';
        $og_description =
            'Kami menawarkan jasa desain murah dan terpercaya, termasuk desain brosur, logo, banner, dan flowchart. Solusi desain profesional untuk kebutuhan bisnis Anda.';
        $og_url = 'https://www.digiexpert.co.id/service/design';
    }
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Digiexpert</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $keyword }}" name="keywords">
    <meta content="{{ $description }}" name="description">
    <meta name="robots" content="{{ $robots }}">

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('kebutuhan/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('kebutuhan/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('kebutuhan/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('kebutuhan/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('kebutuhan/css/style.css') }}" rel="stylesheet">
    <style>
        body {
            max-width: 100%;
            overflow-x: hidden;
        }
    </style>
</head>

<body>

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
