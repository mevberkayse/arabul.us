<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //
    public function create(Request $request) {
        return view('listings.create');
    }

    public function show(Request $request) {
        return view('listings.listing');
    }

    public function index(Request $request, $category, $id, $slug = null) {
        if($slug == null) {
            //TODO: get the listing by $id and $category and redirect to the link with slug (/ilan/{$category}/{$id}-{$slug})
            return redirect()->route('listings.index', ['category' => $category, 'id' => $id, 'slug' => 'slug']);
        }
        
    }
}
