<?php


use Illuminate\Http\Request;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';
require __DIR__ . '/role.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/payment.php';

Route::get('/', [FrontendController::class, 'index'])->name('frontend');
Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// nex will add this pages
Route::get('/services', [ServiceController::class, 'services'])->name('services');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
