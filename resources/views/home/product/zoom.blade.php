<x-home-part-core :count="$count">
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Our Products<span></span></p>
                <h1 class="text-center mb-5">Zoom Premium</h1>
            </div>
            <!-- <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Web Design</li>
                        <li class="mx-2" data-filter=".second">Graphic Design</li>
                    </ul>
                </div>
            </div> -->
            <div class="row g-4 portfolio-container">
                @foreach ($zoom as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" height="130" src="../products/{{ $item->image }}"
                                    alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="../products/{{ $item->image }}" data-lightbox="portfolio"><i
                                            class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2 text-center">Rp. {{ $item->price }}
                                    {{ $item->duration }}</p>
                                <h5 class="lh-base mb-0 text-center">{{ $item->title }}</h5>
                                <a href="{{ route('products.gpt.details', $item->id) }}"
                                    class="btn btn-info mt-2 mb-1 d-block">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <x-home-footer></x-home-footer>
</x-home-part-core>
