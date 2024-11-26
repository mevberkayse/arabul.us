<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Report;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

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
        curl_setopt($ch, CURLOPT_URL, "https://maps.googleapis.com/maps/api/geocode/json?latlng={$lat},{$lng}&result_type=administrative_area_level_4&key=" . env('GOOGLE_MAPS_API_KEY'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output, true);
        $address = $output['results']['0']['formatted_address'];

        $request->session()->put('address', $address);

        return response()->json(['message' => 'success', 'address' => $address]);
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
                'time' => $item->created_at->diffForHumans(),
                'id' => $item->id,
            ];
            if (Auth::check() && Auth::id() == $item->user_id) {
                $a['show_favorite_button'] = false;
                $a['is_favorited'] = false;
            } else {
                $user = Auth::user();
                $a['show_favorite_button'] = true;
                $a['is_favorited'] = Auth::check() ? $user->isFavorited($item->id) : false;
            }
            array_push($arr, $a);
        }

        return response()->json(['items' => $arr, 'q' => $q->getBindings(), 'lat' => $lat, 'lng' => $lng]);
    }

    public function reportProfile(Request $request)
    {
        $user_id = $request->input('user_id');
        $reason = $request->input('reason');
        $details = $request->input('details');
        if (!Auth::check()) {
            return response()->json(['success' => false, 'msg' => 'Lütfen giriş yapınız.']);
        }
        if (!$user_id || !$reason || !$details) {
            return response()->json(['success' => false, 'msg' => 'Tüm alanlar zorunludur.']);
        }

        if (!User::findOrFail($user_id)) {
            return response()->json(['success' => false, 'msg' => 'Şikayet etmek istediğiniz kullanıcı bulunamadı.']);
        }

        $report = new Report();
        $report->reporter_id = Auth::id();
        $report->reported_id = $user_id;
        $report->report_category = $reason;
        $report->text = $details;

        $report->save();

        return response()->json(['success' => true]);
    }

    public function addFavorite(Request $request)
    {
        $listing_id = $request->input('listing_id');
        if (!Auth::check()) {
            return response()->json(['success' => false, 'msg' => 'Lütfen giriş yapınız.']);
        }
        if (!$listing_id) {
            return response()->json(['success' => false, 'msg' => 'İlan ID\'si eksik.']);
        }

        if (!Listing::findOrFail($listing_id)) {
            return response()->json(['success' => false, 'msg' => 'İlan bulunamadı.']);
        }

        $user = Auth::user();

        $userFavs = Favorite::where('user_id', $user->id)->where('listing_id', $listing_id)->get();

        if ($userFavs->count() > 0) {
            Favorite::where('listing_id', $listing_id)->where('user_id', $user->id)->delete();
            return response()->json(['success' => true, 'msg' => 'İlan favorilerinizden çıkarıldı.', 'action' => 'remove']);
        } else {
            $favorite = new Favorite();
            $favorite->listing_id = $listing_id;
            $favorite->user_id = $user->id;
            $favorite->save();
            return response()->json(['success' => true, 'msg' => 'İlan favorilerinize eklendi.', 'action' => 'add']);
        }
    }
}
