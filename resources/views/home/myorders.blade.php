<x-home-part-core :count="$count_cart">
    <div class="container">
        <table class="table table-bordered border-dark table-hover bg-white">
            <thead>
                <tr>
                    <th class="text-dark border-2 fw-1">Product</th>
                    <th class="text-dark border-2">Price</th>
                    <th class="text-dark border-2">Status</th>
                    <th class="text-dark border-2">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <td class="text-dark">{{ $data->product->title }}</td>
                        <td class="text-dark">{{ $data->product->price }}</td>
                        <td class="text-dark">{{ $data->status }}</td>
                        <td style="text-align: center;"><img height="120" width="200"
                                src="../products/{{ $data->product->image }}" alt="{{ $data->product->image }}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <x-home-footer></x-home-footer>
</x-home-part-core>
