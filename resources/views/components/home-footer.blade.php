<div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Address<span></span></p>
                <p><i class="fa fa-map-marker-alt me-3"></i>Maharaja Housing Block R2 Depok, West Java</p>
                <p><i class="fa fa-phone-alt me-3"></i>+62 831-3590-0521</p>
                <p><i class="fa fa-envelope me-3"></i>info@digiexpert.co.id</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/digiexpert.co.id/"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social"
                        href="https://www.linkedin.com/company/digiexpert-co-id"><i class="fab fa-linkedin-in"></i></a>
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
                        <img class="img-fluid" src="{{ asset('portfolio/webdev/porto_webdev9.webp') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{ asset('portfolio/webdev/porto_webdev3.webp') }}" alt="Image">
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
                                    value="{{ Auth::user()->email }}" style="height: 48px;" name="email" readonly>
                                <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                        class="fa fa-paper-plane text-primary fs-4"></i></button>
                            </form>
                        @else
                            <form action="{{ route('subscribe_newsletter') }}" method="POST">
                                @csrf
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
                                    placeholder="Your Email" style="height: 48px;" name="email">
                                <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
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
                    &copy; <a class="border-bottom" href="{{ route('home') }}">Digiexpert</a>, All Right Reserved.
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
<a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
