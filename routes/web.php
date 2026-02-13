<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [App\Http\Controllers\ServiceController::class, 'show'])->name('services.show');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');

// Legal Routes
Route::get('/privacy-policy', [App\Http\Controllers\LegalController::class, 'privacy'])->name('legal.privacy');
Route::get('/terms-and-conditions', [App\Http\Controllers\LegalController::class, 'terms'])->name('legal.terms');
Route::get('/refund-policy', [App\Http\Controllers\LegalController::class, 'refund'])->name('legal.refund');
Route::get('/cookie-policy', [App\Http\Controllers\LegalController::class, 'cookie'])->name('legal.cookie');
Route::get('/disclaimer', [App\Http\Controllers\LegalController::class, 'disclaimer'])->name('legal.disclaimer');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');
