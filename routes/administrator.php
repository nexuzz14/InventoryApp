<?php
use App\Http\Controllers\administrator\RegisteredAdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('admin')->group(function(){
    Route::get('petugasregister', [RegisteredAdminController::class, 'create'])
    ->name('petugasregister');
    Route::post('petugasregister', [RegisteredAdminController::class, 'store']);
});


   