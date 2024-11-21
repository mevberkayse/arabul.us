<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
class IndexController extends Controller
{
    //
    public function saveLocation(Request $request)
    {
        $lat = $request->input('lat');
        $lng = $request->input('lng');

        $request->session()->put('lat', $lat);
        $request->session()->put('lng', $lng);

        // get address from https://maps.googleapis.com/maps/api/geocode/json?latlng={$lat},{$lng}&key=env('GOOGLE_MAPS_API_KEY)
        // save address in session

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://maps.googleapis.com/maps/api/geocode/json?latlng={$lat},{$lng}&result_type=administrative_area_level_2&key=" . env('GOOGLE_MAPS_API_KEY'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);   
        curl_close($ch);
        $output = json_decode($output, true);
        $address = $output['results']['0']['formatted_address'];

        $request->session()->put('address', $address);

        return response()->json(['message' => 'success', 'address'=>$address]);
    }
    public function getItemListByLocation(Request $request)
    {
        if ($request->session()->has('lat') && $request->session()->has('lng')) {
            $lat = $request->session()->get('lat');
            $lng = $request->session()->get('lng');
        } else {
            // respond with "message" => "trigger_location"
            return response()->json(['message' => 'trigger_location']);
        }
        $lat = round($lat, 3);
        $lng = round($lng, 3);

        // map Listing model to get items where `location` = ($lat, $lng)
        $q = Listing::where([['lat', 'LIKE', $lat . "%"], ['long', 'LIKE', $lng . "%"]]);
        $items = Listing::where([['lat', 'LIKE', $lat . "%"], ['long', 'LIKE', $lng . "%"]])->get();

        $arr = [];
        foreach ($items as $item) {
            $a = [
                'url' => route('listings.show', ['id' => $item->id, 'dash' => '-', 'slug' => $item->slug]),
                'title' => $item->title,
                'thumbnail' => $item->getThumbnail(),
                'price' => $item->price,
                'location' => $item->getBasicAddress(),
                'time' => $item->created_at->diffForHumans()
            ];
            array_push($arr, $a);
        }

        return response()->json(['items' => $arr, 'q' => $q->getBindings(), 'lat' => $lat, 'lng' => $lng]);
    }
}
