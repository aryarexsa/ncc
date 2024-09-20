<x-home-part-core :count="$count">
    <div class="container py-5 px-lg-5">
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"
                        aria-expanded="true" aria-controls="collapse1">
                        How to order product?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        1. Register <a href="https://www.digiexpert.co.id/register">here</a><br>
                        2. Login and choose product <a href="https://www.digiexpert.co.id/product/gpt">here</a> then
                        click details<br>
                        3. And then see your order on <a
                            href="https://www.digiexpert.co.id/cart">https://www.digiexpert.co.id/cart</a><br>
                        4. Then click checkout and you will see product details and click "pay now" <br>
                        5. Choose your payment and complete your transaction, then you will see pop up that will
                        redirect you into our whatsapp<br>
                        6. Tell us your transaction code and we will give you access to our account
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                        What payments are available?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We provide BCA, BNI, BRI Virtual Account payments, and other transfer methods. Not only that we
                        also provide Qris Gopay / Shopee pay payment.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        How long does the process take?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Once you report it to us, it takes 5 minutes to 30 minutes.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Our Products<span></span>
                </p>
                <h1 class="text-center mb-5">Chat GPT</h1>
            </div>
            </div> 
            <div class="row g-4 portfolio-container">
                @foreach ($gpt as $gpt)
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" style="height: 230px;"
                                    src="../products/{{ $gpt->image }}" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="../products/{{ $gpt->image }}" data-lightbox="portfolio"><i
                                            class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="https://wa.me/6287886050392"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2 text-center">Rp. {{ $gpt->price }}
                                    {{ $gpt->duration }}</p>
                                <h5 class="lh-base mb-0 text-center">{{ $gpt->title }}</h5>
                                <a href="{{ route('products.gpt.details', $gpt->id) }}"
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
