<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

//عرض صفحة الأدمن الرئيسية
Route::get('/admindashboard',function(){
    if (!session('admin_logged')) {
        return redirect('/secret-admin-login');
    }
    return view('admindashboard');
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/admin/home/edit', [HomeController::class, 'edit']);
Route::post('/admin/home/update', [HomeController::class, 'update'])
    ->name('home.update');
//عرض صفحة الخدمات
Route::get('/services', [ServiceController::class, 'index']);

Route::get('/admin/services/edit', [ServiceController::class, 'edit']);

Route::post('/admin/services/store', [ServiceController::class, 'store'])->name('services.store');

Route::put('/admin/services/{service}', [ServiceController::class, 'update'])->name('services.update');

Route::delete('/admin/services/{service}', [ServiceController::class, 'destroy'])->name('services.delete');
//عرض صقحة من نحن
Route::get('/about', [AboutUsController::class, 'index']);
Route::get('/admin/about/edit', [AboutUsController::class, 'edit']);
Route::post('/admin/about/update', [AboutUsController::class, 'update'])
    ->name('about.update');
//عرض صفحى التواصل
Route::get('/admin/contact', [ContactController::class, 'index']);
Route::get('/admin/contact/edit', [ContactController::class, 'edit']);
Route::post('/admin/contact/update', [ContactController::class, 'update'])
    ->name('contact.update');
//عرض صفحة الأدمن 

Route::get(
    '/secret-admin-login',
    [AdminController::class, 'loginForm']
);

Route::post(
    '/secret-admin-login',
    [AdminController::class, 'login']
);

Route::get(
    '/reset-password',
    [AdminController::class, 'resetForm']
);

Route::post(
    '/reset-password',
    [AdminController::class, 'resetPassword']
);

Route::get(
    '/logout',
    [AdminController::class, 'logout']
);