<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Response;

class ShareMainCategories
{
    public function handle(Request $request, Closure $next): Response
    {
        // Ana kategorileri getir
        $mainCategories = Category::where('parent_id', 0)->with('subCategories')->get();
        
        // Tüm view'lara paylaş
        view()->share('mainCategories', $mainCategories);
        
        return $next($request);
    }
} 