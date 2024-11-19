<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $firstCategorySubCategories = Category::where('parent_id', 1)->get();
        $secondCategorySubCategories = Category::where('parent_id', 2)->get();
        $thirdCategorySubCategories = Category::where('parent_id', 3)->get();
        $fourthCategorySubCategories = Category::where('parent_id', 4)->get();

        view()->share('firstCategorySubCategories', $firstCategorySubCategories);
        view()->share('secondCategorySubCategories', $secondCategorySubCategories);
        view()->share('thirdCategorySubCategories', $thirdCategorySubCategories);
        view()->share('fourthCategorySubCategories', $fourthCategorySubCategories);
    }
}
