<?php

use App\Http\Controllers\API\CreateListingController as APICreateListingController;
use App\Http\Controllers\API\IndexController as APIIndexController;
use App\Http\Controllers\CreateListingController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\UserController;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/ilan-yukle/{step?}', [CreateListingController::class, 'create'])->name('listings.create')->whereIn('step', [null, 0, 1, 2, 3, 4, 5, 6, 7, 8]);

// static page for development purposes
Route::get("/ilan/{id}{dash?}{slug?}", [ListingController::class, 'show'])->name('listings.show')->whereNumber('id')->where('dash', '-');

Route::get('/ilanlar/{category?}', [ListingController::class, 'index'])->name('listings.by_category');

Route::get('/chat', [ProfileController::class, 'chat'])->name('chat');
Route::get('/edit-profile', [ProfileController::class, 'editprofile'])->name('editprofile');

Route::get('/kullanici-profili/{id?}', [UserController::class, 'showProfile'])->whereNumber('id');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/{id?}', [ProfileController::class, 'show'])->name('profile.show')->whereNumber('id');
    Route::post('/profile/update-picture', [ProfileController::class, 'updatePicture'])->name('profile.update-picture');
    Route::any('/delete-picture', [ProfileController::class, 'deletePicture'])->name('profile.delete-picture');

});

Route::get('/settings', [ProfileController::class, 'settings']);
Route::get('/clear-session', function () {
    session()->forget('create_listing_images');
    session()->forget('create_listing_category');
    session()->forget('create_listing_subcategory');
    session()->forget('create_listing_subsubcategory');
    session()->forget('create_listing_data');
    session()->forget('create_listing_parameters');

    return redirect()->back();
});
Route::get("/search", [SearchController::class, 'index'])->name('search.index');

Route::prefix('api')->group(function () {
    Route::post('/save-location', [APIIndexController::class, 'saveLocation']);
    Route::get('/homepage/listings-by-location', [APIIndexController::class, 'getItemListByLocation']);

    Route::post('/create-listing/step-{step}', [APICreateListingController::class, 'createListing'])->whereIn('step', [null, 0, 1, 2, 3, 4, 5, 6, 7, 8]);

    Route::post('/profile/report', [APIIndexController::class, 'reportProfile']);

    Route::post('/favorite/add', [APIIndexController::class, 'addFavorite']);

    Route::post('/filter-listings/{category}', [APIIndexController::class, 'filterListings']);

    Route::get('/search', [APIIndexController::class, 'search']);

    Route::post('/search/filter', [APIIndexController::class, 'searchFilter']);
});
Route::get('/login/{provider}/redirect', [SocialLoginController::class, 'redirectToProvider'])->whereIn('provider', ['google', 'facebook'])->name('google.redirect');
Route::get('/login/{provider}/callback', [SocialLoginController::class, 'handleCallback'])->whereIn('provider', ['google', 'facebook'])->name('google.callback');


require __DIR__ . '/auth.php';
