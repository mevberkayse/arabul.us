<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class CreateListingController extends Controller
{
    //

    public function createListing(Request $request, $step) {
        $user = $request->user();


        $request->session()->put('create_listing', []);
        
        
        switch($step) {
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
            case 7:
                return $this->step_7($request);
            default:
                return response()->json(['error' => 'Invalid step'], 400);
        }
    }

    private function step_1(Request $request) {
        // step 1: 12 foto seçtir, seçtikçe kutucukları doldur,min 1 max 12, seçmeden devam ederse hata ver, ilk sıradaki thumbnail, yüklenen tüm resimleri session'a kaydet

        $request->validate([
            'images' => 'required|array|min:1|max:12',
            'images.*' => 'required',
        ]);

        $images = $request->input('images');
        $request->session()->put('create_listing.images', $images);

        return response()->json(['success' => 'Images uploaded successfully'], 200);

    }
    private function step_2(Request $request) {

        // step 2: parent kategori secimi
        $cat = $request->input('category');

        $request->session()->put('create_listing.category', $cat);

        return response()->json(['success' => 'Category selected successfully'], 200);
        
    }
    private function step_3(Request $request) {
        // step 3: parent kategoriye göre subkategori seç
    }
    private function step_4(Request $request) {
        // step 4: subkategoriye göre ya subkategori seçtiriyor ya da bi sonraki adıma atlıyor
    }
    private function step_5(Request $request) {
        // step 5: title, fiyat, açıklama, konum, telefon no bilgisi girilir
    }
    private function step_6(Request $request) {
        // step 6: seçilen subkategoriye göre parametre bilgileri
    }
    private function step_7(Request $request) {
        // preview sayfası 
    }
}
