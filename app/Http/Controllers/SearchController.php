<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Category;
class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = $request->input('query');
        $listings = Listing::where('title', 'LIKE', '%' . $query . '%')->orWhere('descriptions', 'LIKE', '%' . $query . '%')->get();
        // get $listings items categories
        $categories = [];
        foreach($listings as $listing) {
            $categories[] = Category::where('id', $listing->category_id)->first();
        }

        // filter out duplicate categories
        $categories = array_unique($categories);

        // get parameters for each category, put them in an array and remove duplicates
        $parameters = [];
        foreach($categories as $category) {
            $parameters[] = $category->getParameters();
        }
        $parameters = array_unique($parameters, SORT_REGULAR);


        return view('listings.search_results', ['listings' => $listings, 'categories' => $categories, 'parameters' => $parameters]);
    }
}
