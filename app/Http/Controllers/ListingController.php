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
}
