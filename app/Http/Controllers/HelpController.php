<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class HelpController extends Controller
{
    public function index()
    {
        $mainCategories = Category::where('parent_id', 0)->get();
        return view('yardim', compact('mainCategories'));
    }
} 