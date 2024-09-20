<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <x-admin-sidebar></x-admin-sidebar>
        <div class="content">
            <x-admin-nav></x-admin-nav>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4 justify-content-center">
                    <div class="col-sm-12 col-xl-6">
                        <div class="row bg-secondary rounded mx-0 align-items-start form-container">
                            <div class="col-12 text-center py-4">
                                <h2 class="text-white">Add Article</h2>
                            </div>
                            <div class="col-12 px-5">
                                <form action="{{ route('admin.insert.article') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="judul" class="form-label text-white">Judul article</label>
                                        <input type="text" name="judul" class="form-control" id="judul"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tanggal" class="form-label text-white">Tanggal
                                            dibuat</label>
                                        <input type="text" name="tanggal" class="form-control" id="tanggal"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="paragraf1" class="form-label text-white">Paragraf 1</label>
                                        <input type="text" name="paragraf1" class="form-control no-arrows"
                                            id="paragraf1" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="paragraf2" class="form-label text-white">Paragraf 2</label>
                                        <input type="text" name="paragraf2" class="form-control" id="paragraf2"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="paragraf3" class="form-label text-white">Paragraf 3</label>
                                        <input type="text" name="paragraf3" class="form-control" id="paragraf3"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="paragraf4" class="form-label text-white">Paragraf 4</label>
                                        <input type="text" name="paragraf4" class="form-control" id="paragraf4"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="paragraf5" class="form-label text-white">Paragraf 5</label>
                                        <input type="text" name="paragraf5" class="form-control" id="paragraf5"
                                            required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="kategori_article" class="form-label text-white">Kategori
                                            article</label>
                                        <select name="kategori_article" class="form-select"
                                            aria-label="Floating label select example" id="kategori_article">
                                            <option selected>Pilih Kategori article</option>
                                            @foreach ($category as $category)
                                                <option value="{{ $category->nama }}">{{ $category->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3 text-center">
                                        <input class="btn btn-primary" type="submit" value="Add article">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir footer -->
        </div>

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script type="text/javascript">
        function confirmation(ev) {
            ev.preventDefault();

            var urlRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlRedirect);

            swal({
                    title: 'test',
                    text: 'Ini Text',
                    buttons: true,
                    icon: 'warning',
                    dangerMode: true,
                })

                .then((batal) => {
                    if (batal) {
                        window.location.href = urlRedirect;
                    }
                });
        }
    </script>


    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
