<?php

use App\Http\Controllers\API\CreateListingController as APICreateListingController;
use App\Http\Controllers\API\IndexController as APIIndexController;
use App\Http\Controllers\CreateListingController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/ilan-yukle/{step?}', [CreateListingController::class, 'create'])->name('listings.create')->whereIn('step', [null, 0, 1,2,3,4,5,6,7,8]);

// static page for development purposes
Route::get("/ilan/{id}{dash?}{slug?}", [ListingController::class, 'show'])->name('listings.show')->whereNumber('id')->where('dash', '-');

Route::get('/ilanlar/{category?}', [ListingController::class, 'index'])->name('listings.by_category');

Route::get('/chat', [ProfileController::class, 'chat'])->name('chat');
Route::get('/edit-profile', [ProfileController::class, 'editprofile'])->name('editprofile');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

});
Route::post('/follow/{id}', [FollowController::class, 'follow'])->name('follow');

Route::get("/search?{query}", [SearchController::class, 'index'])->name('search.index');

Route::prefix('api')->group(function() {
    Route::post('/save-location', [APIIndexController::class, 'saveLocation']);
    Route::get('/homepage/listings-by-location', [APIIndexController::class, 'getItemListByLocation']);

    Route::post('/create-listing/step-{step}', [APICreateListingController::class, 'createListing'])->whereIn('step', [null, 0, 1,2,3,4,5,6,7,8]);
});

require __DIR__.'/auth.php';
