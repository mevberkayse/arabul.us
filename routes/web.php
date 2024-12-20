<?php

use App\Http\Controllers\AdminController;
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
use App\Http\Controllers\API\ConversationController;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/ilan-yukle/{step?}', [CreateListingController::class, 'create'])->name('listings.create')->whereIn('step', [null, 0, 1, 2, 3, 4, 5, 6, 7, 8]);

// static page for development purposes
Route::get("/ilan/{id}{dash?}{slug?}", [ListingController::class, 'show'])->name('listings.show')->whereNumber('id')->where('dash', '-');

Route::get('/ilanlar/{category?}', [ListingController::class, 'index'])->name('listings.by_category');

Route::get('/chat', [ProfileController::class, 'chat'])->name('chat');
Route::get('/edit-profile', [ProfileController::class, 'editprofile'])->name('editprofile');

Route::get('/kullanici-profili/{id?}', [UserController::class, 'showProfile'])->whereNumber('id');
Route::get('/settings', [ProfileController::class, 'settings']);

Route::get('/yardim', [ProfileController::class, 'yardim']);
Route::post('/change-password', [UserController::class, 'changePassword'])->name('change-password');

Route::get('/map', function(){
    return view('map');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/{id?}', [ProfileController::class, 'show'])->name('profile.show')->whereNumber('id');
    Route::post('/profile/update-picture', [ProfileController::class, 'updatePicture'])->name('profile.update-picture');
    Route::any('/delete-picture', [ProfileController::class, 'deletePicture'])->name('profile.delete-picture');
    Route::post('/profile/update-name', [ProfileController::class, 'updateName'])->name('profile.update-name');
    Route::post('/profile/update-email', [ProfileController::class, 'updateEmail'])->name('profile.update.email');
    Route::post('/logout-all', [ProfileController::class, 'logoutFromAllDevices'])->middleware('auth');

    Route::get('/favorilerim', [ProfileController::class, 'favorites'])->name('profile.favorites');

    Route::get('/api/conversations/{conversationId}/messages', [ConversationController::class, 'getMessages']);
    Route::get('/api/conversations/{conversationId}/listing', [ConversationController::class, 'getListing']);
    Route::post('/api/conversations/{conversationId}/create-message', [ConversationController::class, 'saveMessage']);
    Route::delete('/api/conversations/{conversationId}/delete', [ConversationController::class, 'deleteConversation']);

    Route::post('/api/conversations/create', [ConversationController::class, 'createConversation']);

    Route::post('/api/listings/mark-as-sold', [APIIndexController::class, 'markAsSold']);

    Route::post('/api/listing/edit', [APIIndexController::class, 'editListing']);
});
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

    Route::post('/listings-by-bounds', [APIIndexController::class, 'getListingsByBounds']);

    Route::post('/follow/{id}', [APIIndexController::class, 'follow'])->whereNumber('id');
});
Route::get('/login/{provider}/redirect', [SocialLoginController::class, 'redirectToProvider'])->whereIn('provider', ['google', 'facebook'])->name('google.redirect');
Route::get('/login/{provider}/callback', [SocialLoginController::class, 'handleCallback'])->whereIn('provider', ['google', 'facebook'])->name('google.callback');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'show'])->name('admin.dashboard');

    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'loginPost'])->name('admin.login.post');

    Route::get('/logout', function () {
        session()->forget('admin_login');
        session()->forget('admin_id');

        return redirect()->route('admin.login');
    })->name('admin.logout');

    Route::get('/ilanlar', [AdminController::class, 'listings'])->name('admin.listings');
    Route::get('/sikayetler', [AdminController::class, 'reports'])->name('admin.reports');

    Route::get('/ilan-preview/{id}', [AdminController::class, 'listingPreview'])->name('admin.listing.preview');

    Route::get('/ilanlar/{id}/{action}', [AdminController::class, 'listingAction'])->name('admin.listing.action')->whereIn('action', ['approve', 'deny']);

    Route::get('/sikayet-preview/{id}', [AdminController::class, 'reportPreview'])->name('admin.report.preview');

    Route::post('/sikayet/delete', [AdminController::class, 'reportDelete'])->name('admin.report.delete');

    Route::get('/users/{id}', [AdminController::class, 'userPreview'])->name('admin.user.preview');
    Route::get('/kullanicilar', [AdminController::class, 'users'])->name('admin.users');
});

require __DIR__ . '/auth.php';
