<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CreateListingController extends Controller
{
    //

    public function createListing(Request $request, $step)
    {
        $user = $request->user();

        if(!$user) return redirect('/');


        $request->session()->put('create_listing', []);


        switch ($step) {
            case 1:
                return $this->step_1($request);
            case 2:
                return $this->step_2($request);
            case 3:
                return $this->step_3($request);
            case 4:
                return $this->step_4($request);
            case 5:
                return $this->step_5($request);
            case 6:
                return $this->step_6($request);
            default:
                return response()->json(['error' => 'Invalid step'], 400);
        }
    }

    private function step_1(Request $request)
    {
        // step 1: 12 foto seçtir, seçtikçe kutucukları doldur,min 1 max 12, seçmeden devam ederse hata ver, ilk sıradaki thumbnail, yüklenen tüm resimleri session'a kaydet

        $request->validate([
            'images' => 'required|array|min:1|max:12',
            'images.*' => 'required',
        ]);

        $images = $request->input('images');
        $request->session()->put('create_listing_images', $images);

        return response()->json(['success' => 'Images uploaded successfully'], 200);
    }
    private function step_2(Request $request)
    {

        // step 2: parent kategori secimi
        $cat = $request->input('category');

        if (!$cat) {
            return response()->json(['error' => 'Category is required'], 400);
        }
        if (Category::where('id', $cat)->where('parent_id', -1)->count() == 0) {
            return response()->json(['error' => 'Invalid category'], 400);
        }

        $request->session()->put('create_listing_category', $cat);

        return response()->json(['success' => 'Category selected successfully'], 200);
    }
    private function step_3(Request $request)
    {
        // step 3: parent kategoriye göre subkategori seç
        $subsubcat = $request->input('subcategory');
        $cat = $request->input('category');


        if (!$subsubcat || !$cat) {
            return response()->json(['error' => 'Subcategory is required'], 400);
        }
        if (Category::where('id', $subsubcat)->count() == 0) {
            return response()->json(['error' => 'Invalid subcategory'], 400);
        }
        $request->session()->put('create_listing_subcategory', $cat);
        $request->session()->put('create_listing_subsubcategory', $subsubcat);

        return response()->json(['success' => 'Subcategory selected successfully'], 200);
    }
    private function step_4(Request $request)
    {
        // step 4: başlık, fiyat, açıklama, konum, telefon no bilgisi girilir
        $request->validate([
            'title' => 'required|string|min:3|max:255',
            'price' => 'required|numeric|min:1|max:999999999',
            'description' => 'required|string|max:1000',
            'location' => 'required|string',
        ]);

        $data = $request->only(['title', 'price', 'description', 'location']);
        $request->session()->put('create_listing_data', $data);

        return response()->json(['success' => 'Data saved successfully'], 200);
    }
    private function step_5(Request $request)
    {
        // step 5: title, fiyat, açıklama, konum, telefon no bilgisi girilir
        $parameters = $request->input('parameters');
        $request->session()->put('create_listing_parameters', $parameters);

        return response()->json(['success' => 'Parameters saved successfully'], 200);
    }
    private function step_6(Request $request)
    {
        // create listing using session data
        $user = $request->user();
        $images = $request->session()->get('create_listing_images');
        $category = $request->session()->get('create_listing_category');
        $subcategory = $request->session()->get('create_listing_subcategory');
        $subsubcategory = $request->session()->get('create_listing_subsubcategory');
        $data = $request->session()->get('create_listing_data');
        $parameters = $request->session()->get('create_listing_parameters');
        $listing_id = $request->session()->get('listing_id');
        // if listing_id is set, update listing instead of creating new one
        if(!$user || !$images || !$category || !$subcategory || !$subsubcategory || !$data || !$parameters) {
            return response()->json(['success' => 'An error occured']);
        }
        if ($listing_id) {
            $listing = Listing::findOrFail($listing_id);
            $listing->category_id = $subsubcategory;
            $listing->title = $data['title'];
            $listing->price = $data['price'];
            $listing->descriptions = $data['description'];
            $listing->location = $data['location'];
            $listing->slug = Str::slug($data['title']);
            $listing->is_active = 1;
            $listing->status = 0;
            $listing->lat = $request->session()->get('lat');
            $listing->long = $request->session()->get('lng');
            $listing->parameters = "";
            $listing->save();
            $images = $this->saveImages($images, $listing->id);
            $params = [
                'images' => $images,
                ...$parameters
            ];
            debugbar()->info($params);
            $listing->parameters = $params;
            $listing->save();
            return response()->json([
                'success' => 'Listing updated successfully',
                'link' => route('listings.show', ['id' => $listing->id, 'dash' => '-', 'slug' => $listing->slug])
            ], 200);
        }


        $listing = new Listing();
        $listing->user_id = $user->id;
        $listing->category_id = $subsubcategory;
        $listing->title = $data['title'];
        $listing->price = $data['price'];
        $listing->descriptions = $data['description'];
        $listing->location = $data['location'];
        $listing->slug = Str::slug($data['title']);
        $listing->is_active = 1;
        $listing->status = 0;
        $listing->lat = $request->session()->get('lat');
        $listing->long = $request->session()->get('lng');
        $listing->parameters = "";
        $listing->save();
        $images = $this->saveImages($images, $listing->id);
        $params = [
            'images' => $images,
            ...$parameters
        ];
        debugbar()->info($params);
        $listing->parameters = $params;
        $listing->save();


        // clear session data
        $request->session()->forget('create_listing_images');
        $request->session()->forget('create_listing_category');
        $request->session()->forget('create_listing_subcategory');
        $request->session()->forget('create_listing_subsubcategory');
        $request->session()->forget('create_listing_data');
        $request->session()->forget('create_listing_parameters');


        return response()->json([
            'success' => 'Listing created successfully',
            'link' => route('listings.show', ['id' => $listing->id, 'dash' => '-', 'slug' => $listing->slug])
        ], 200);
    }
    private function saveImages($images, $listing_id)
    {
        // $images contains base64 encoded images
        // save images to public/listings/{id}/image_{n}.png
        // return array of image paths

        $paths = [];
        // check if directory exists
        debugbar()->info(public_path("/listings/{$listing_id}"));
        if (!is_dir(public_path("/listings/{$listing_id}"))) {
            mkdir(public_path("/listings/{$listing_id}"));
        }

        foreach ($images as $index => $image) {
            $path = public_path("/listings/{$listing_id}/image_{$index}.png");
            $this->base64_to_jpeg($image, $path);
            $paths[] = "/listings/{$listing_id}/image_{$index}.png";
        }



        return $paths;
    }
    private function base64_to_jpeg($base64_string, $output_file)
    {
        // first of all, check if base64 string is well formatted. if so, then no need to proceed with image creation, just save the base64 string as it is to the file
        // if base64 string is not formatted, then proceed with image creation

        if(!preg_match('/^data:image\/(\w+);base64,/', $base64_string)) {
            // save the base64 string as it is to the file
            file_put_contents($output_file, $base64_string);
            return $output_file;
        }

        // open the output file for writing
        $ifp = fopen($output_file, 'wb');

        // split the string on commas
        // $data[ 0 ] == "data:image/png;base64"
        // $data[ 1 ] == <actual base64 string>
        // base64 string could be well formatted already. If not, add some validation
        $data = explode(',', $base64_string);

        // if base64 string is well formatted, then $data[0] is the actual image data
        if(count($data) < 2 ) {
            fwrite($ifp, base64_decode($data[0]));
        } else fwrite($ifp, base64_decode($data[1]));

        // clean up the file resource
        fclose($ifp);

        return $output_file;
    }
}
