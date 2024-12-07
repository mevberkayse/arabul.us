<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Listing extends Model
{

    use HasFactory;

    protected $casts = [
        'parameters' => 'array'
    ];

    public function getThumbnail()
    {
        $parameters = $this->parameters;
        if (isset($parameters['images']) && count($parameters['images']) > 0) {
            return $parameters['images'][0];
        }
        return config('app.default_listing_thumbnail');
    }

    public function getCategory()
    {
        return Category::findOrFail($this->category_id);
    }

    public function getImagesArray()
    {
        // remove first image (thumbnail)
        $parameters = $this->parameters;
        if (isset($parameters['images'])) {
            return ($parameters['images']);
        }
        return [];
    }
    public function getBasicAddress()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://maps.googleapis.com/maps/api/geocode/json?latlng={$this->lat},{$this->long}&result_type=administrative_area_level_2&key=" . env('GOOGLE_MAPS_API_KEY'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);

        curl_close($ch);
        $output = json_decode($output, true);
        $address = $output['results'][0]['formatted_address'];

        return $address;
    }

    public static function nearestTo($lat, $lng)
    {
        return Listing::where('lat', 'LIKE', $lat . "%")->where('long', 'LIKE', $lng . "%");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSlug()
    {
        return Str::slug($this->title);
    }

    public function getParameters()
    {
        $params = (array) $this->parameters;
        // remove first element from $params
        array_shift($params);
        return $params;
    }
}
