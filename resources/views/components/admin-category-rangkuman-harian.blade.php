<div class="container-fluid pt-4 px-4">
    <div class="row g-4 justify-content-center">
        <div class="col-sm-12 col-xl-6">
            <div class="row bg-secondary rounded mx-0 align-items-start form-container">
                <div class="col-12 text-center py-4">
                    <h2 class="text-white">Add Category</h2>
                </div>
                <div class="col-12 px-5">
                    <form action="{{ route('admin_add_category') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="nama_kategori" class="form-label text-white">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" required>
                        </div>
                        <div class="form-group mb-3 text-center">
                            <input class="btn btn-primary" type="submit" value="Add Category">
                        </div>
                    </form>
                </div>
                <div class="col-12 px-5 mt-4">
                    <table class="table table-bordered table-hover bg-white">
                        <thead>
                            <tr>
                                <th>Nama Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_category as $data)
                                <tr>
                                    <td>{{ $data->nama }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
