<x-home-part-core :count="$count">
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Services<span></span></p>
                <h1 class="text-center mb-5">Services that we offer</h1>
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
                        <h5 class="mb-3">CV Making Services</h5>
                        <p class="m-0">Make others believe that you are a professional</p>
                        <a class="btn btn-square" href="https://wa.me/6283135900521"><i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <x-home-footer></x-home-footer>
</x-home-part-core>
