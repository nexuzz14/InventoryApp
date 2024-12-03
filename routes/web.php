<?php

use App\Http\Controllers\downloadPdf;
use App\Http\Controllers\halamanSewa;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('multiple')->name('dashboard');

Route::middleware("multiple")->group(function(){
    Route::get('/dashboard/order', function(){
        return view('HalamanOrder');
    })->name('order');
    Route::get('/dashboard/transasksi', function(){
        return view('HalamanTransaksi');
    })->name("transaksi");
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('administrator')->group(function (){
    Route::get('dashboard/mobil', function(){
        return view('dashboard.viewMobil');
    })->name("viewMobil");
});

require __DIR__.'/auth.php';
require __DIR__.'/administrator.php';
