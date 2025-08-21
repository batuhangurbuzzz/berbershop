<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::middleware(['setLocale','mainSettings'])->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/hakkimizda', [PageController::class, 'about'])->name('about');
    Route::get('/hizmetler', [PageController::class, 'services'])->name('services');
    Route::get('/hizmetler/{slug}', [PageController::class, 'service'])->name('service');
    Route::get('/iletisim', [PageController::class, 'contact'])->name('contact');

    Route::get(
        '/language/{lang}', [LanguageController::class, 'switchLang']
    )->name('language');
});
