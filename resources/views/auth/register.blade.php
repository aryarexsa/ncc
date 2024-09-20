<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register - Digiexpert</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('logo.ico') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.html" class="">
                                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i></h3>
                                </a>
                                <h3>Register</h3>
                            </div>
                            <x-auth-session-status class="mb-4" :status="session('status')"></x-auth-session-status>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="name">
                                <label for="name">Name</label>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"></x-input-error>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email">
                                <label for="email">Email</label>
                                <x-input-error :messages="$errors->get('email')" class="mt-2"></x-input-error>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control no-arrows" name="no_hp" id="phone">
                                <label for="phone">Phone</label>
                                <x-input-error :messages="$errors->get('no_hp')" class="mt-2"></x-input-error>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="alamat" id="alamat">
                                <label for="alamat">Address</label>
                                <x-input-error :messages="$errors->get('alamat')" class="mt-2"></x-input-error>
                            </div>
                            <div class="form-floating mb-4">
                                <input autocomplete="password" type="password" class="form-control" name="password"
                                    id="password">
                                <label for="password">Password</label>
                                <x-input-error :messages="$errors->get('password')"></x-input-error>
                            </div>
                            <div class="form-floating mb-4">
                                <input autocomplete="password_confirmation" type="password" class="form-control"
                                    name="password_confirmation" id="floatingPassword">
                                <label for="floatingPassword">Confirm Password</label>
                                <x-input-error :messages="$errors->get('password_confirmation')"></x-input-error>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Register</button>
                            <p class="text-center mb-0">Already have an Account? <a href="{{ route('login') }}">Login
                                </a></p>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <p class="text-center mb-0">Reset your password? <a
                                        href="{{ route('password.request') }}">Forgot Password
                                    </a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
