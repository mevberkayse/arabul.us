<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/ilan-yukle', [ListingController::class, 'create'])->name('listings.create');
// static page for development purposes
Route::get("/ilan", [ListingController::class, 'show'])->name('listings.show');

Route::get("/ilan/category/{id}-{slug?}", [ListingController::class, 'index'])->whereNumber('id')->name('listings.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("/search?{query}", [SearchController::class, 'index'])->name('search.index');
Route::get("/ekle",[DatabaseController::class,'ekle)']);
require __DIR__.'/auth.php';
