<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/hakkimizda', [PageController::class, 'about'])->name('about');
Route::get('/hizmetler', [PageController::class, 'services'])->name('services');
Route::get('/hizmetler/{slug}', [PageController::class, 'service'])->name('service');
Route::get('/iletisim', [PageController::class, 'contact'])->name('contact');
