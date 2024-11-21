<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

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
        return view('listings.create.step_' . $step);
    }
}
