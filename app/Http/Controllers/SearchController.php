<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Category;
use App\Models\Parameter;

class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = $request->input('query');
        $listings = Listing::where('title', 'LIKE', '%' . $query . '%')->orWhere('descriptions', 'LIKE', '%' . $query . '%')->get();
        $categories = Category::all();
        $parameters = Parameter::all()->groupBy('parameter_name');
        $mainCategories = Category::where('parent_id', 0)->get();
        return view('listings.search_results', compact('listings', 'query', 'categories', 'parameters', 'mainCategories'));
    }
}
