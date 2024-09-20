<x-home-core>
    <div class="container-xxl bg-white p-0">
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="container-xxl position-relative p-0">
            <x-home-nav :count="$count"></x-home-nav>
            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">A Digital Agency Of Inteligents & Creative
                                People</h1>
                            <p class="text-white pb-3 animated slideInDown">We are a digital agency that combines
                                creativity and intelligence to offer comprehensive solutions for your
                                business. From
                                AI-based products that enhance operational efficiency to professional CV creation that
                                strengthens your image, we provide innovative and tailored services to meet your needs.
                            </p>
                            <a href="{{ route('about') }}"
                                class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">About
                                Us</a>
                            <a href="#subscribe"
                                class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Subscribe</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="{{ asset('kebutuhan/img/hero.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-home-feature></x-home-feature>

        <x-home-about></x-home-about>

        <x-home-statistic></x-home-statistic>

        <div class="container-xxl py-5" id="glimpse">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Glimpse Of
                        Us<span></span></p>
                    <h1 class="text-center mb-5">The Various Things We Provide</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-search fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Digital Marketing</h5>
                            <p class="m-0">We are ready to spread and market your product.</p>
                            <a class="btn btn-square" href="https://wa.me/6283135900521"><i
                                    class="fa fa-arrow-right text-primary"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-solid fa-robot fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Artificial Intelligence</h5>
                            <p class="m-0">Available chat GPT-4o, GPT-4 plus, and GPT-4 team.</p>
                            <a class="btn btn-square" href="{{ route('products.gpt') }}"><i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-solid fa-palette fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Design</h5>
                            <p class="m-0">We provide logo, banner, brochure design services.</p>
                            <a class="btn btn-square" href="{{ route('services.design') }}"><i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-laptop-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Web Development</h5>
                            <p class="m-0">Made by professional and certified programmers</p>
                            <a class="btn btn-square" href="{{ route('services.webdev') }}"><i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-sharp fa-light fa-file fa-2x"></i>
                            </div>
                            <h5 class="mb-3">CV Making Service</h5>
                            <p class="m-0">Make others believe that you are a professional</p>
                            <a class="btn btn-square" href="https://wa.me/6283135900521"><i
                                    class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="subscribe" class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span>
                        </p>
                        <h1 class="text-center text-white mb-4">Stay Always In Touch</h1>
                        <p class="text-white mb-4">Subscribe immediately to get information about interesting promos
                            from our services and products</p>
                        <div class="position-relative w-100 mt-3">
                            @if (Route::has('login'))
                                @auth
                                    <form action="{{ route('subscribe_newsletter') }}" method="POST">
                                        @csrf
                                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email"
                                            placeholder="{{ Auth::user()->email }}" style="height: 48px;" name="email"
                                            disabled>
                                        <button type="submit"
                                            class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                                    @else
                                        <form action="{{ route('subscribe_newsletter') }}" method="POST">
                                            @csrf
                                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5"
                                                type="email" placeholder="Enter Your Email" style="height: 48px;"
                                                name="email">
                                            <button type="submit"
                                                class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                                        </form>
                                    @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-home-testimonial></x-home-testimonial>

        <x-home-team></x-home-team>

        <x-home-footer></x-home-footer>
    </div>
</x-home-core>
