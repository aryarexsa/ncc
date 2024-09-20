@props(['count'])

<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0"></h1>
        <img src="{{ asset('kebutuhan/img/logo.webp') }}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{ route('home') }}"
                class="nav-item nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}"
                class="nav-item nav-link {{ Request::routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('services') }}"
                class="nav-item nav-link {{ Request::routeIs('services') ? 'active' : '' }}">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('products.gpt') }}" class="dropdown-item">GPT</a>
                </div>
            </div>
        </div>

        @if (Route::has('login'))
            @auth
                <!-- Versi Desktop -->
                <div class="d-none d-lg-flex align-items-center mt-3 mt-lg-0">
                    <a class="btn rounded-pill py-2 px-4 ms-3 position-relative" href="{{ route('mycart') }}">
                        <i class="fas fa-regular fa-cart-shopping"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                            {{ $count }}
                        </span>
                    </a>
                    <a class="btn rounded-pill py-2 px-4 ms-3" href="{{ route('profile.edit') }}">Profile</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="submit" class="btn rounded-pill py-2 px-4 ms-3" value="Logout">
                    </form>
                </div>

                <div class="navbar-nav d-lg-none">
                    <a href="{{ route('mycart') }}" class="nav-item nav-link">
                        <i class="fas fa-regular fa-cart-shopping"></i>
                        <span class="badge bg-secondary ms-2">{{ $count }}</span>
                    </a>
                    <a href="{{ route('profile.edit') }}" class="nav-item nav-link">Profile</a>
                    <form action="{{ route('logout') }}" method="POST" class="nav-item">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">Logout</button>
                    </form>
                </div>
            @else
                <div class="navbar-nav d-lg-none">
                    <a href="{{ route('login') }}"
                        class="btn rounded-pill py-2 px-4 ms-3 mb-3 bg-secondary nav-link">Login</a>
                    <a href="{{ route('register') }}"
                        class="btn rounded-pill py-2 px-4 ms-3  bg-secondary nav-link">Register</a>
                </div>

                <div class="d-none d-lg-flex align-items-center mt-3 mt-lg-0">
                    <a href="{{ route('login') }}" class="btn rounded-pill py-2 px-4 ms-3  nav-link">Login</a>
                    <a href="{{ route('register') }}" class="btn rounded-pill py-2 px-4 ms-3 nav-link">Register</a>
                </div>
            @endauth
        @endif
    </div>
</nav>
