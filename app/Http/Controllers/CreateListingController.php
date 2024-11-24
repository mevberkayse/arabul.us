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
        if ($step == 3) {
            $parentCategory = $request->session()->get('create_listing_category');
            if ($parentCategory == null) {
                return redirect()->route('listings.create', ['step' => 2]);
            }
            $category = Category::findOrFail($parentCategory);
            $subCategories = Category::where('parent_id', $parentCategory)->get();
            return view('listings.create.step_' . $step, ['category' => $category, 'subCategories' => $subCategories]);
        }
        if($step == 5) {
            $parentCategory = $request->session()->get('create_listing_category');
            if ($parentCategory == null) {
                return redirect()->route('listings.create', ['step' => 2]);
            }
            $category = Category::findOrFail($parentCategory);
            $subCategory = $request->session()->get('create_listing_subcategory');
            if ($subCategory == null) {
                return redirect()->route('listings.create', ['step' => 3]);
            }
            $subCategory = Category::findOrFail($subCategory);
            $subSubCategory = $request->session()->get('create_listing_subsubcategory');
            if ($subSubCategory == null) {
                return redirect()->route('listings.create', ['step' => 4]);
            }
            $subSubCategory = Category::findOrFail($subSubCategory);

            debugbar()->info('Category:' . $category->id);
            debugbar()->info('SubCategory:' . $subCategory->id);
            debugbar()->info('SubSubCategory:' . $subSubCategory->id);


            return view('listings.create.step_' . $step, ['category' => $category, 'subCategory' => $subCategory, 'subSubCategory' => $subSubCategory, 'categoryParameters' => $category->getParameters(), 'subCategoryParameters' => $subCategory->getParameters(), 'subSubCategoryParameters' => $subSubCategory->getParameters()]);
        }
        return view('listings.create.step_' . $step);
    }
}
