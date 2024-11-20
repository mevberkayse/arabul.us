<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;

    public function getParentCategory()
    {
        return $this->parent_id == -1 ? $this : Category::where('id', $this->parent_id)->first();
    }

    public function getSubCategories()
    {
        return Category::where('parent_id', $this->id)->get();
    }
    public function getListingCount() {
        if($this->parent_id == -1) {
            $subcategories = $this->getSubCategories();
            $subcategories = $subcategories->pluck('id');
            return Listing::whereIn('category_id', $subcategories)->count();
        }
        
        return Listing::where('category_id', $this->id)->count();
    }

    public function hasSubCategories()
    {
        return Category::where('parent_id', $this->id)->count() > 0;
    }
}
