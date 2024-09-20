<x-home-part-core :count="$count">
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Category<span></span></p>
                <h1 class="text-center mb-5">Some of Products That We Sell</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-search fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Chat GPT</h5>
                        <p class="m-0">Support your learning and work every day</p>
                        <a class="btn btn-square" href="{{ route('products.gpt') }}"><i
                                class="fa fa-arrow-right text-primary"></i></a>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-brands fa-spotify fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Spotify Premium</h5>
                        <p class="m-0">Make your day happy and energised with music</p>
                        <a class="btn btn-square" href="{{ route('products.spotify') }}"><i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-solid fa-z fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Zoom Premium</h5>
                        <p class="m-0">Meetings are easier and more practical </p>
                        <a class="btn btn-square" href="{{ route('products.zoom') }}"><i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <x-home-footer></x-home-footer>
</x-home-part-core>
