<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Report;
use App\Models\User;
use App\Models\Category;
use App\Models\Conversation;
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
        $lat = round($lat, 0);
        $lng = round($lng, 0);

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
    public function filterListings(Request $request, $category)
    {
        // Get filters from the request
        $filters = $request->input('params');
        $cat = Category::findOrFail($category);

        // Base query for listings in the category
        $listings = Listing::where('category_id', $cat->id);

        // Filter by price range
        if (isset($filters['min_price'])) {
            $minPrice = $filters['min_price'];
            $listings = $listings->where('price', '>=', $minPrice);
        }
        if (isset($filters['max_price'])) {
            $maxPrice = $filters['max_price'];
            $listings = $listings->where('price', '<=', $maxPrice);
        }
        // Filter by location
        if (isset($filters['sehir'])) {
            $location = $filters['sehir'];
            $listings = $listings->where('location', 'LIKE', '%' . $location . '%');
        }

        // Filter by JSON parameters
        foreach ($filters as $key => $value) {
            if (empty($value)) {
                continue;
            }

            if (preg_match('/parameter_(\d+)/', $key, $matches)) {
                $parameterId = $matches[1];

                $listings = $listings->whereRaw(
                    'JSON_CONTAINS(
                    JSON_EXTRACT(parameters, "$.*"),
                    ?,
                    "$"
                )',
                    [json_encode(["parameter_id" => $parameterId, "parameter_value" => $value])]
                );
            }
        }

        // format the listings
        $listings = $listings->get();
        $arr = [];
        foreach ($listings as $item) {
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

        return response()->json(['items' => $arr]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $listings = Listing::where('title', 'LIKE', '%' . $query . '%')->orWhere('descriptions', 'LIKE', '%' . $query . '%')->get();
        $arr = [];

        foreach ($listings as $item) {
            $a = [
                'url' => route('listings.show', ['id' => $item->id, 'dash' => '-', 'slug' => $item->slug]),
                'title' => $item->title,
                'thumbnail' => $item->getThumbnail(),
                'price' => $item->price,
                'location' => $item->getBasicAddress(),
                'time' => $item->created_at->diffForHumans(),
                'id' => $item->id,
            ];

            array_push($arr, $a);
        }

        return response()->json(['items' => $arr]);
    }

    public function searchFilter(Request $request)
    {
        // Get filters from the request
        $filters = $request->input('params');
        $query = $request->input('query');

        // Base query for listings in the category
        $listings = Listing::where('title', 'LIKE', '%' .  $query . '%')->orWhere('descriptions', 'LIKE', '%' . $query . '%');

        // Filter by price range
        if (isset($filters['min_price'])) {
            $minPrice = $filters['min_price'];
            $listings = $listings->where('price', '>=', $minPrice);
        }
        if (isset($filters['max_price'])) {
            $maxPrice = $filters['max_price'];
            $listings = $listings->where('price', '<=', $maxPrice);
        }
        // Filter by location
        if (isset($filters['sehir'])) {
            $location = $filters['sehir'];
            $listings = $listings->where('location', 'LIKE', '%' . $location . '%');
        }

        // Filter by JSON parameters
        foreach ($filters as $key => $value) {
            if (empty($value)) {
                continue;
            }

            if (preg_match('/parameter_(\d+)/', $key, $matches)) {
                $parameterId = $matches[1];

                $listings = $listings->whereRaw(
                    'JSON_CONTAINS(
                        JSON_EXTRACT(parameters, "$.*"),
                        ?,
                        "$"
                    )',
                    [json_encode(["parameter_id" => $parameterId, "parameter_value" => $value])]
                );
            }
        }

        // format the listings
        $listings = $listings->get();
        $arr = [];
        foreach ($listings as $item) {
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

        return response()->json(['items' => $arr]);
    }

    public function getListingsByBounds(Request $request)
    {
        $bounds = $request->input('bounds');
        // $bounds is a json object with keys: 'east', 'north', 'south', 'west'
        $listings = Listing::whereBetween('lat', [$bounds['south'], $bounds['north']])->whereBetween('long', [$bounds['west'], $bounds['east']])->get();
        $arr = [];

        foreach ($listings as $item) {
            $a = [
                'url' => route('listings.show', ['id' => $item->id, 'dash' => '-', 'slug' => $item->slug]),
                'title' => $item->title,
                'thumbnail' => $item->getThumbnail(),
                'price' => $item->price,
                'location' => $item->getBasicAddress(),
                'time' => $item->created_at->diffForHumans(),
                'id' => $item->id,
                'lat' => $item->lat,
                'lng' => $item->long,
            ];

            array_push($arr, $a);
        }

        return response()->json(['listings' => $arr]);
    }

    public function follow(Request $request, int $userId)
    {
        $user = Auth::user();
        $followedUser = User::findOrFail($userId);

        if ($user->isFollowing($followedUser)) {
            $user->unfollow($followedUser);
            return response()->json([
                'success' => true,
                'action' => 'unfollow',
                'followersCount' => $followedUser->followers->count()
            ]);
        } else {
            $user->follow($followedUser);
            return response()->json([
                'success' => true,
                'action' => 'follow',
                'followersCount' => $followedUser->followers->count()
            ]);
        }
    }

    public function markAsSold(Request $request)
    {
        $listingId = $request->input('listing_id');
        $listing = Listing::findOrFail($listingId);

        if ($listing->user_id != Auth::id()) {
            return response()->json(['success' => false, 'msg' => 'Bu işlemi yapmaya yetkiniz yok.']);
        }

        // clear al conversations related to this listing
        Conversation::where('listing_id', $listingId)->delete();

        $listing->delete();

        return response()->json(['success' => true, 'msg' => 'İlan başarıyla satıldı olarak işaretlendi.']);
    }

    public function editListing(Request $request)
    {
        $listing = Listing::findOrFail($request->input('listing_id'));

        // check if the user is the owner of the listing
        if ($listing->user_id != Auth::id()) {
            return response()->json(['success' => false, 'msg' => 'Bu işlemi yapmaya yetkiniz yok.']);
        }
        // put the listing in the session as we did in CreateListingController
        $request->session()->put('create_listing_images', $listing->getImagesArray());
        // if $listing->category_id's parent also has a parent, create_listing_category should be the parent's parent and create_listing_subcategory should be the parent and create_listing_subsubcategory should be $category, otherwise, create_listing_category should be the parent and create_listing_subcategory and create_listing_subsubcategory should be $listing->category_id.
        $category = Category::findOrFail($listing->category_id);
        $parent = Category::findOrFail($category->parent_id);
        if($parent->id !== -1)
            $parentParent = Category::findOrFail($parent->parent_id);
        else $parentParent = $parent;

        if ($parentParent->parent_id) {
            $request->session()->put('create_listing_category', $parentParent->id);
            $request->session()->put('create_listing_subcategory', $parent->id);
            $request->session()->put('create_listing_subsubcategory', $category->id);
        } else {
            $request->session()->put('create_listing_category', $parent->id);
            $request->session()->put('create_listing_subcategory', $category->id);
            $request->session()->put('create_listing_subsubcategory', $category->id);
        }
        $data = [
            'title' => $listing->title,
            'price' => $listing->price,
            'description' => $listing->descriptions,
            'location' => $listing->location,
            'phone' => $listing->phone,
        ];
        $request->session()->put('create_listing_data', $data);
        // parameters are stored as json in the database, in the following format:
        /*
            {"images":["\/listings\/6\/image_0.png","\/listings\/6\/image_1.png","\/listings\/6\/image_2.png"],"0":{"parameter_id":"1","parameter_name":"Marka","parameter_value":"Apple"},"1":{"parameter_id":"2","parameter_name":"RAM","parameter_value":"256 MB"},"2":{"parameter_id":"3","parameter_name":"Depolama","parameter_value":"128 GB"},"3":{"parameter_id":"4","parameter_name":"Kamera \u00c7\u00f6z\u00fcn\u00fcrl\u00fc\u011f\u00fc","parameter_value":"5 MP"},"4":{"parameter_id":"5","parameter_name":"Batarya Kapasitesi","parameter_value":"3001-3500 mAh"},"5":{"parameter_id":"6","parameter_name":"Renk","parameter_value":"Lacivert"},"6":{"parameter_id":"89","parameter_name":"Pazarl\u0131k","parameter_value":"Yok"},"7":{"parameter_id":"90","parameter_name":"Takas","parameter_value":"Var"},"8":{"parameter_id":"91","parameter_name":"Durum","parameter_value":"Az Kullan\u0131m"}}

            */
        // we need to convert this to an array and store it in the session and remove the 'images' key
        $parameters = $listing->parameters;
        unset($parameters['images']);
        $request->session()->put('create_listing_parameters', $parameters);
        // put listing id
        $request->session()->put('listing_id', $listing->id);

        // redirect to the create listing page
        return response()->json(['success' => true, 'msg' => 'İlan düzenleme sayfasına yönlendiriliyorsunuz.', 'link' => route('listings.create', ['step' => 1])]);


    }
}
