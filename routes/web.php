<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

require __DIR__ . '/auth.php';

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('service', 'services')->name('services');
    Route::get('product', 'products')->name('products');
    Route::get('contact', 'contact')->name('contact');

    Route::get('/service/digitalmarketing', 'services_digitalmarketing')->name('services.digitalmarketing');
    Route::get('/service/webdev', 'services_webdev')->name('services.webdev');
    Route::get('/service/design', 'services_design')->name('services.design');
    Route::get('/service/cv', 'services_cv')->name('services.cv');
    Route::get('/product/gpt', 'products_gpt')->name('products.gpt');
    Route::get('/product/spotify', 'products_spotify')->name('products.spotify');
    Route::get('/product/zoom', 'products_zoom')->name('products.zoom');

    Route::get('/product/details/{id}', 'products_gpt_details')->name('products.gpt.details');

    Route::get('/product/spotify', 'products_spotify')->name('products.spotify');
    Route::get('/product/zoom', 'products_zoom')->name('products.zoom');

    Route::get('maintenance', 'maintenance')->name('maintenance');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/product/add_cart/{id}', [HomeController::class, 'add_cart'])->name('add.cart');
    Route::get('/cart', [HomeController::class, 'mycart'])->name('mycart');
    Route::get('/cart/delete/{id}', [HomeController::class, 'delete_cart'])->name('cart.delete');
    Route::get('myorders', [HomeController::class, 'myorders'])->name('myorders');
    Route::get('/products/confirm/{id}', [HomeController::class, 'confirm_order_gpt'])->name('confirm.order.gpt');
    Route::get('/products/checkout/{id}', [HomeController::class, 'checkout'])->name('checkout');

    Route::post('/subs_newsletter', [HomeController::class, 'subs'])->name('subscribe_newsletter');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', [HomeController::class, 'admin'])->name('admin_dashboard');

    Route::get('admin/category', [AdminController::class, 'view_category'])->name('admin_category');
    Route::post('admin/add_category', [AdminController::class, 'add_category'])->name('admin_add_category');
    Route::get('admin/delete_category/{id}', [AdminController::class, 'delete_category'])->name('admin_delete_category');

    Route::get('admin/edit_category/{id}', [AdminController::class, 'edit_category'])->name('admin_edit_category');
    Route::post('admin/update_category/{id}', [AdminController::class, 'update_category'])->name('admin_update_category');

    Route::get('admin/add_product', [AdminController::class, 'add_product'])->name('admin_add_product');
    Route::post('admin/insert_products', [AdminController::class, 'insert_product'])->name('admin_insert_product');
    Route::get('admin/view_products', [AdminController::class, 'view_products'])->name('admin_view_products');
    Route::get('admin/delete_products/{id}', [AdminController::class, 'delete_products'])->name('admin_delete_product');

    Route::get('admin/edit_products/{id}', [AdminController::class, 'edit_product'])->name('admin_edit_product');
    Route::post('admin/update_product/{id}', [AdminController::class, 'update_product'])->name('admin_update_product');

    Route::get('admin/search_products', [AdminController::class, 'search_product'])->name('admin_search_product');

    Route::get('admin/projects', [AdminController::class, 'projects'])->name('admin.projects');
    Route::get('admin/add_projects', [AdminController::class, 'add_projects'])->name('admin.add_projects');
    Route::post('admin/insert_project', [AdminController::class, 'insert_projects'])->name('admin.insert_projects');

    Route::get('admin/edit_projects/{id}', [AdminController::class, 'edit_projects'])->name('admin.edit_projects');
    Route::post('admin/update_projects/{id}', [AdminController::class, 'update_projects'])->name('admin.update_projects');
    Route::post('admin/delete_projects/{id}', [AdminController::class, 'delete_project'])->name('admin.delete_projects');
    Route::get('admin/orders', [AdminController::class, 'orders'])->name('admin.orders');

    Route::get('admin/changestatus/sold/{id}', [AdminController::class, 'change_status'])->name('admin.status_sold');
    Route::get('admin/printpdf/{id}', [AdminController::class, 'printpdf'])->name('admin.orders_printpdf');

    Route::get('admin/listusers', [AdminController::class, 'list_users'])->name('admin.users.list');
    Route::get('admin/search_users', [AdminController::class, 'search_users'])->name('admin.users.search');
    Route::get('admin/subs_users', [AdminController::class, 'subs_users'])->name('admin.users.subs');

    Route::get('admin/article', [AdminController::class, 'article'])->name('admin.manage.article');
    Route::get('admin/search_article', [AdminController::class, 'search_article'])->name('admin_search_article');
    Route::post('admin/insert_article', [AdminController::class, 'insert_article'])->name('admin.insert.article');
    Route::get('admin/add_category_article', [AdminController::class, 'addCategoryArticle'])->name('admin.add.category.article');
    Route::post('admin/add_new_category_article', [AdminController::class, 'addNewCategoryArticle'])->name('admin.add.new.category.article');

    Route::get('admin/edit_category_article/{id}', [AdminController::class, 'editCategoryArticle'])->name('admin.edit.category.article');
    Route::get('admin/delete_category_article{id}', [AdminController::class, 'deleteCategoryArticle'])->name('admin.delete.category.article');
    Route::post('admin/update_category/{id}', [AdminController::class, 'updateCategoryArticle'])->name('admin.update.category');

    Route::get('admin/add/article', [AdminController::class, 'addArticle'])->name('admin.add.article');
});
