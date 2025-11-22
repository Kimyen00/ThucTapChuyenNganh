<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\KhachHangController;
use App\Http\Controllers\Admin\NguoiQuanLyController;
use App\Http\Controllers\Admin\DichVuController;
use App\Http\Controllers\Admin\LoaiPhongController;
use App\Http\Controllers\Admin\DatPhongController;
use App\Http\Controllers\Admin\HoaDonController;
use App\Http\Controllers\Admin\PhongController;
use App\Http\Controllers\Admin\TienNghiPhongController;







Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('login-h', function () {
    return view('login-h');
})->name('login-h');

Route::get('register-h', function () {
    return view('register-h');
})->name('register-h');

Route::get('service', function () {
    return view('service');
})->name('service');

Route::get('service-spa', function () {
    return view('service-spa');
})->name('service-spa');

Route::get('service-car', function () {
    return view('service-car');
})->name('service-car');

Route::get('service-foods', function () {
    return view('service-foods');
})->name('service-foods');

Route::get('service-gym', function () {
    return view('service-gym');
})->name('service-gym');

Route::get('service-pool', function () {
    return view('service-pool');
})->name('service-pool');

Route::get('service-tour', function () {
    return view('service-tour');
})->name('service-tour');

Route::get('rooms', function () {
    return view('rooms');
})->name('rooms');


Route::get('blank', function () {
    return view('blank');
})->name('blank');


Route::get('cards', function () {
    return view('cards');
})->name('cards');


Route::get('tables', function () {
    return view('tables');
})->name('tables');


Route::get('charts', function () {
    return view('charts');
})->name('charts');


Route::get('navbar', function () {
    return view('navbar');
})->name('navbar');


Auth::routes();
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () 
{
    Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::resource('khachhangs', KhachHangController::class)->names('admin.khachhangs');   

    Route::resource('admin/nguoiquanlys', NguoiQuanLyController::class)->names('admin.nguoiquanlys');

    Route::resource('admin/dichvus', DichVuController::class)->names('admin.dichvus');

    Route::get('loaiphongs', [LoaiPhongController::class, 'index'])->name('admin.loaiphongs.index');

    Route::resource('admin/datphongs', DatPhongController::class)->names('admin.datphongs');

    Route::resource('admin/hoadons', HoaDonController::class)->names('admin.hoadons');

    Route::resource('admin/phongs', PhongController::class)->names('admin.phongs');

    Route::resource('admin/tiennghis', TienNghiPhongController::class)->names('admin.tiennghis');
    













});
     Route::resource('admin/nguoiquanlys', NguoiQuanLyController::class)
     ->names('admin.nguoiquanlys');
Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');