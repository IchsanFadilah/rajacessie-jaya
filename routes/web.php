<?php

use App\Http\Controllers\ProductController;
use App\Livewire\AuctionCatalog;
use App\Livewire\CessieCatalog;
use App\Livewire\NewProjectCatalog;
use App\Livewire\ProductCatalog;
use App\Livewire\ProjectCatalog;
use App\Livewire\SaleCatalog;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');

Route::get('/tentang-kami', \App\Livewire\About::class)->name('about');
Route::get('/kontak', \App\Livewire\Contact::class)->name('contact');


Route::get('/cessie', CessieCatalog::class)->name('cessie-catalog');
Route::get('/cessie/{cessie:slug}', [\App\Http\Controllers\CessieController::class, 'show'])->name('cessie');


Route::get('/jual', SaleCatalog::class)->name('sale-catalog');
Route::get('/jual/{sale:slug}', [\App\Http\Controllers\JualController::class, 'show'])->name('jual');


Route::get('/lelang', AuctionCatalog::class)->name('auction-catalog');
Route::get('/lelang/{auction:slug}', [\App\Http\Controllers\LelangController::class, 'show'])->name('lelang');


Route::get('/proyek-baru', ProjectCatalog::class)->name('project-catalog');
Route::get('/proyek-baru/{project:slug}', [\App\Http\Controllers\ProyekController::class, 'show'])->name('proyek-baru');


Route::view('/cart', 'pages.cart')->name('cart');
Route::view('/checkout', 'pages.checkout')->name('checkout');
Route::view('/order-confirmed', 'pages.order-confirmed')->name('order-confirmed');
Route::view('/page', 'pages.page')->name('page');
