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

        // Ana kategorileri al (parent_id = 0 olanlar)
        $mainCategories = Category::where('parent_id', 0)->get();

        // İlgili adımın view dosyasını döndür
        return view('listings.create.step_' . $step, [
            'mainCategories' => $mainCategories
        ]);
    }

    public function createStep2()
    {
        // Ana kategorileri al (parent_id = 0 olanlar)
        $mainCategories = Category::where('parent_id', 0)->with('subCategories')->get();

        // Blade dosyasına gönder
        return view('listings.create.step_2', compact('mainCategories'));
    }

    public function show(Request $request, $id, $slug = null)
    {
        $listing = Listing::findOrFail($id);
        if ($slug == null) {
            return redirect()->route('listings.show', ['id' => $id, 'slug' => $listing->slug]);
        }
        $listings = Listing::all()->take(3);
        return view('listings.listing_new', ['listing' => $listing, 'listings' => $listings]);
    }

     public function index(Request $request, $category)
    {
        $cat = Category::findOrFail($category);
        if ($cat->parent_id == -1 || $cat->hasSubCategories()) {
            $subcategories = $cat->getSubCategories();
            $subcategories = $subcategories->pluck('id');
            $listings = Listing::whereIn('category_id', $subcategories)->take(20)->get();
        } else {
            $listings = Listing::where('category_id', $category)->take(20)->get();
        }

        $mainCategories = Category::where('parent_id', -1)->with('subCategories')->get();

        return view('listings.search_results', [
            'listings' => $listings, 
            'category' => $cat,
            'mainCategories' => $mainCategories,
            'categories' => Category::all(),
            'parameters' => \App\Models\Parameter::all()->groupBy('category_id')
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $listings = Listing::where('title', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->take(20)
            ->get();

        $mainCategories = Category::where('parent_id', -1)->with('subCategories')->get();

        return view('listings.search_results', [
            'listings' => $listings,
            'query' => $query,
            'mainCategories' => $mainCategories,
            'categories' => Category::all(),
            'parameters' => \App\Models\Parameter::all()->groupBy('category_id')
        ]);
    }
}
