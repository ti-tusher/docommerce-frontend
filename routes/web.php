<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('home');
Route::get('/digital-marketing', [App\Http\Controllers\WebController::class, 'digitalmarketing'])->name('digital-marketing');
Route::get('/animation-photography-videography', [App\Http\Controllers\WebController::class, 'animationPhotographyVideography'])->name('animation-photography-videography');
Route::get('/branding', [App\Http\Controllers\WebController::class, 'brandService'])->name('branding');
Route::get('/delivery', [App\Http\Controllers\WebController::class, 'delivery'])->name('delivery');
Route::get('/sell-on-own-website', [App\Http\Controllers\WebController::class, 'sellWebsite'])->name('sell-on-own-website');
Route::get('/sell-on-instagram', [App\Http\Controllers\WebController::class, 'sellInstagram'])->name('sell-on-instagram');
Route::get('/sell-on-facebook', [App\Http\Controllers\WebController::class, 'sellFacebook'])->name('sell-on-facebook');
Route::get('/sell-on-mobile-app', [App\Http\Controllers\WebController::class, 'sellMobileApp'])->name('sell-on-mobile-app');
Route::get('/sell-on-pos', [App\Http\Controllers\WebController::class, 'sellPOS'])->name('sell-on-pos');
Route::get('/store-management', [App\Http\Controllers\WebController::class, 'storeManagement'])->name('store-management');
Route::get('/mobile-app', [App\Http\Controllers\WebController::class, 'mobileApp'])->name('mobile-app');
Route::get('/pricing', [App\Http\Controllers\WebController::class, 'pricing'])->name('pricing');
Route::get('/free-training', [App\Http\Controllers\WebController::class, 'freeTraining'])->name('free-training');
Route::get('/free-training/other-pages', [App\Http\Controllers\WebController::class, 'freeTraining2'])->name('free-training/other-pages');
Route::get('/free-training/details', [App\Http\Controllers\WebController::class, 'freeTrainingDetails'])->name('free-training/details');
Route::get('/dropshipping', [App\Http\Controllers\WebController::class, 'dropshipping'])->name('dropshipping');
Route::get('/supplier', [App\Http\Controllers\WebController::class, 'supplier'])->name('supplier');
Route::get('/verification', [App\Http\Controllers\WebController::class, 'verification'])->name('verification');
Route::get('/about-docommerce', [App\Http\Controllers\WebController::class, 'about'])->name('about-docommerce');
Route::get('/contact-us', [App\Http\Controllers\WebController::class, 'contact'])->name('contact-us');
Route::get('/careers', [App\Http\Controllers\WebController::class, 'careers'])->name('careers');
