<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Parameter;

class CreateListingController extends Controller
{
    //

    public function create(Request $request, $step = null)
    {
        if ($step == null) {
            return redirect()->route('listings.create', ['step' => 1]);
        }
        if ($step == 2) {
            $images = $request->session()->get('create_listing_images');
            if ($images == null) {
                return redirect()->route('listings.create', ['step' => 1])->withErrors(['images' => 'Lütfen en az bir resim yükleyin']);
            }

            return view('listings.create.step_' . $step, ['images' => $images]);
        }
        if ($step == 3) {
            $images = $request->session()->get('create_listing_images');
            if ($images == null) {
                return redirect()->route('listings.create', ['step' => 1])->withErrors(['images' => 'Lütfen en az bir resim yükleyin']);
            }

            $parentCategory = $request->session()->get('create_listing_category');
            if ($parentCategory == null) {
                return redirect()->route('listings.create', ['step' => 2])->withErrors(['category' => 'Lütfen bir kategori seçin']);
            }
            $category = Category::findOrFail($parentCategory);
            $subCategories = Category::where('parent_id', $parentCategory)->get();
            return view('listings.create.step_' . $step, ['category' => $category, 'subCategories' => $subCategories]);
        }
        if ($step == 5) {
            $images = $request->session()->get('create_listing_images');
            if ($images == null) {
                return redirect()->route('listings.create', ['step' => 1])->withErrors(['images' => 'Lütfen en az bir resim yükleyin']);
            }
            $parentCategory = $request->session()->get('create_listing_category');
            if ($parentCategory == null) {
                return redirect()->route('listings.create', ['step' => 2])->withErrors(['category' => 'Lütfen bir kategori seçin']);
            }
            $category = Category::findOrFail($parentCategory);
            $subCategory = $request->session()->get('create_listing_subcategory');
            if ($subCategory == null) {
                return redirect()->route('listings.create', ['step' => 3])->withErrors(['category' => 'Lütfen bir alt kategori seçin']);
            }
            $subCategory = Category::findOrFail($subCategory);
            $subSubCategory = $request->session()->get('create_listing_subsubcategory');
            if ($subSubCategory == null) {
                return redirect()->route('listings.create', ['step' => 4])->withErrors(['category' => 'Lütfen bir alt kategori seçin']);
            }
            $data = $request->session()->get('create_listing_data');
            if ($data == null) {
                return redirect()->route('listings.create', ['step' => 4])->withErrors(['category' => 'Lütfen tüm bilgileri doldurun']);
            }
            $subSubCategory = Category::findOrFail($subSubCategory);

            $generalParameters = Parameter::where('category_id', '-1')->get();
            debugbar()->info('Category:' . $category->id);
            debugbar()->info('SubCategory:' . $subCategory->id);
            debugbar()->info('SubSubCategory:' . $subSubCategory->id);


            return view('listings.create.step_' . $step, ['category' => $category, 'subCategory' => $subCategory, 'subSubCategory' => $subSubCategory, 'categoryParameters' => $category->getParameters(), 'subCategoryParameters' => $subCategory->getParameters(), 'subSubCategoryParameters' => $subSubCategory->getParameters(), 'generalParameters' => $generalParameters]);
        }
        if ($step == 6) {

            $parentCategory = $request->session()->get('create_listing_category');
            if ($parentCategory == null) {
                return redirect()->route('listings.create', ['step' => 1])->withErrors(['category' => 'Lütfen bir kategori seçin']);
            }
            $category = Category::findOrFail($parentCategory);
            $subCategory = $request->session()->get('create_listing_subcategory');
            if ($subCategory == null) {
                return redirect()->route('listings.create', ['step' => 2])->withErrors(['category' => 'Lütfen bir alt kategori seçin']);
            }
            $subCategory = Category::findOrFail($subCategory);
            $subSubCategory = $request->session()->get('create_listing_subsubcategory');
            if ($subSubCategory == null) {
                return redirect()->route('listings.create', ['step' => 3])->withErrors(['category' => 'Lütfen bir alt kategori seçin']);
            }
            $subSubCategory = Category::findOrFail($subSubCategory);
            $data = $request->session()->get('create_listing_data');
            if ($data == null) {
                return redirect()->route('listings.create', ['step' => 4])->withErrors(['category' => 'Lütfen tüm bilgileri doldurun']);
            }

            // find the actual parameter count, include categoryparams, subcategoryparams, subsubcategoryparams and generalparams, if subcategoryparams and subsubcategoryparams are the same, then we need to remove one of them
            $actualParameteCount = count($category->getParameters()) + count($subCategory->getParameters()) + count($subSubCategory->getParameters()) + count(Parameter::where('category_id', '-1')->get());
            if ($subCategory->id == $subSubCategory->id) {
                $actualParameteCount -= count($subCategory->getParameters());
            }

            $parameters = $request->session()->get('create_listing_parameters');
            if ($parameters == null || count($parameters) != $actualParameteCount) {
                return redirect()->route('listings.create', ['step' => 5])->withErrors(['category' => 'Lütfen tüm bilgileri doldurun']);
            }
            return view('listings.create.step_' . $step, ['category' => $category, 'subCategory' => $subCategory, 'subSubCategory' => $subSubCategory, 'data' => $data, 'parameters' => $parameters]);
        }

        return view('listings.create.step_' . $step);
    }
}
