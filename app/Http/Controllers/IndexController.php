<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        // find 20 latest listings

        // if user has lat and lng in session, find listings near them
        // if not, show all listings
        $lat = $request->session()->get('lat');
        $lng = $request->session()->get('lng');
        $run_script = true;
        if ($lat && $lng) {
            $listings = Listing::nearestTo($lat, $lng)->take(20)->get();
            $run_script = false;
        } else {
            $listings = Listing::latest()->take(20)->get();
        }

        return view('homepage', [
            'listings' => $listings,
            'run_script' => $run_script
        ]);
    }
}
