<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/test', function () {
    return view('app');
});
Route::get('/', function () {
    return view('app2');
});
