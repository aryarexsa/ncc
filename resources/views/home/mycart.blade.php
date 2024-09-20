<x-home-part-core :count="$count">
    <div class="table-container">
        @if ($data_cart->isEmpty())
            <div class="container">
                <div class="alert alert-warning">Anda belum menambahkan product</div>
            </div>
        @else
            <table class="table table-bordered border-dark table-hover bg-white">
                <thead class="d-none">
                    <tr>
                        <th class="text-dark border-2 fw-1 d-none d-md-table-cell">Product</th>
                        <th class="text-dark border-2 d-none d-md-table-cell">Price</th>
                        <th class="text-dark border-2 d-none d-md-table-cell">Image</th>
                        <th class="text-dark border-2 d-none d-md-table-cell">Checkout</th>
                        <th class="text-dark border-2 d-none d-md-table-cell">Remove</th>
                    </tr>
                </thead>
                <thead class="d-md-table-header-group">
                    <tr>
                        <th class="text-dark border-2 fw-1 d-none d-md-table-cell">Product</th>
                        <th class="text-dark border-2 d-none d-md-table-cell">Price</th>
                        <th class="text-dark border-2 d-none d-md-table-cell">Image</th>
                        <th class="text-dark border-2 d-none d-md-table-cell">Checkout</th>
                        <th class="text-dark border-2 d-none d-md-table-cell">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_cart as $cart)
                        <tr>
                            <td class="text-dark d-block d-md-table-cell">{{ $cart->product->title }}</td>
                            <td class="text-dark d-block d-md-table-cell">Rp. {{ $cart->product->price }}
                                {{ $cart->product->duration }}</td>
                            <td class="text-center d-block d-md-table-cell">
                                <img height="120" width="200" src="../products/{{ $cart->product->image }}"
                                    alt="{{ $cart->product->image }}">
                            </td>
                            <td class="text-center align-middle d-block d-md-table-cell">
                                <!--<form action="" method="POST">
                                    <input type="submit" class="btn btn-info btn-md" id= value="Checkout">
                                </form> -->
                                <a href="{{ route('confirm.order.gpt', $cart->product->id) }}"
                                    class="btn btn-info btn-md">Checkout</a>
                            </td>
                            <td class="text-center align-middle d-block d-md-table-cell">
                                <a href="{{ route('cart.delete', $cart->product->id) }}"
                                    class="btn btn-secondary btn-md">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <x-home-footer></x-home-footer>
</x-home-part-core>
