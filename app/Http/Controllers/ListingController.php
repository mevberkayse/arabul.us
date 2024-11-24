<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use App\Models\Category;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //
    public function create(Request $request, $step = null)
    {
        if ($step == null) {
            return redirect()->route('listings.create', ['step' => 1]);
        }
        return view('listings.create.step_' . $step);
    }

    public function show(Request $request, $id, $slug = null)
    {
        $listing = Listing::findOrFail($id);
        if ($slug == null) {

            return redirect()->route('listings.show', ['id' => $id, 'slug' => $listing->slug]);
        }
        $listings = Listing::all()->take(4);
        return view('listings.listing_new', ['listing' => $listing, 'listings' => $listings]);
    }

    public function index(Request $request, $category)
    {
        $cat = Category::findOrFail($category);
        if ($cat->parent_id == -1) {
            $subcategories = $cat->getSubCategories();
            $subcategories = $subcategories->pluck('id');
            $listings = Listing::whereIn('category_id', $subcategories)->take(20)->get();
            return view('listings.listing', ['listings' => $listings, 'category' => $cat]);
        }
        $listings = Listing::where('category_id', $category)->take(20)->get();

        return view('listings.listing', ['listings' => $listings, 'category' => $cat]);
    }
}
