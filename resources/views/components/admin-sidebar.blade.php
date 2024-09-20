@php
    $products = '';
    $routeName = Request::route()->getName();
    $routes = [
        'admin_add_product',
        'admin_insert_product',
        'admin_delete_product',
        'admin_edit_product',
        'admin_update_product',
        'admin_search_product',
    ];

    if (in_array($routeName, $routes)) {
        $products = 'active';
    }
@endphp

<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Top Secret</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('img/user.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>{{ Auth::user()->usertype }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin_dashboard') }}"
                class="nav-item nav-link {{ request::routeIs('admin_dashboard') ? 'active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ $products }}" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Products</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('admin_add_product') }}" class="dropdown-item">Add Products</a>
                    <a href="{{ route('admin_view_products') }}" class="dropdown-item">View Products</a>
                    <a href="{{ route('admin.orders') }}" class="dropdown-item">Orders</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Projects</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('admin.projects') }}" class="dropdown-item">View Projects</a>
                    <a href="{{ route('admin.add_projects') }}" class="dropdown-item">Add Projects</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-regular fa-user me-2"></i>Users</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('admin.users.list') }}" class="dropdown-item">List Users</a>
                    <a href="{{ route('admin.users.subs') }}" class="dropdown-item">Subscriber</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-regular fa-user me-2"></i>Article</a>
                <div class="dropdown-menu bg-transparent">
                    <a href="{{ route('admin.manage.article') }}" class="dropdown-item">Manage Article</a>
                    <a href="{{ route('admin.add.article') }}" class="dropdown-item">Add Article</a>
                    <a href="{{ route('admin.add.category.article') }}" class="dropdown-item">Add Category</a>
                </div>
            </div>
            <a href="{{ route('admin_category') }}" class="nav-item nav-link"><i class="fa fa-th me-2"
                    :active="request() - > is('category')"></i>Category</a>
        </div>
    </nav>
</div>
