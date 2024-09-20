<x-home-part-core :count="$count">
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="row">
                <!-- Gambar Produk -->
                <div class="col-md-6 mb-4">
                    <img class="img-fluid rounded shadow-sm" src="{{ asset('../products/' . $product_details->image) }}"
                        alt="{{ $product_details->title }}">
                </div>

                <!-- Detail Produk -->
                <div class="col-md-6">
                    <h1 class="mb-3">{{ $product_details->title }}</h1>
                    <h4 class="text-secondary mb-3">Category: {{ $product_details->category }}</h4>
                    <p class="mb-3">{{ $product_details->description }}</p>
                    <h4 class="text-primary mb-4">Price: Rp. {{ $product_details->price }}
                        {{ $product_details->duration }}</h4>

                    <!-- Add to Cart Button -->
                    <a href="{{ route('add.cart', $product_details->id) }}" class="btn btn-info d-block w-100">Add to
                        Cart</a>
                </div>
            </div>
        </div>
    </div>

    <x-home-footer></x-home-footer>
</x-home-part-core>
