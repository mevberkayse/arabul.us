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
    public function getListingCount()
    {
        if ($this->parent_id == -1) {
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

    public function getParameters()
    {
        $allParams = Parameter::where('category_id', 'like', '%' . $this->id . '%')->get();
        // if $this->id is 1 and category_id contains 10,11,12 in any way then it will return all parameters with category_id 10,11,12.
        // So we need to filter out the parameters that are not related to this category.
        $params = [];
        foreach ($allParams as $param) {
            $categoryIds = explode(',', $param->category_id);
            if (in_array($this->id, $categoryIds)) {
                $params[] = $param;
            }
        }
        // also add parameters with category_id as -1
        $generalParams = Parameter::where('category_id', -1)->get();
        foreach ($generalParams as $param) {
            $params[] = $param;
        }
        return $params;
    }
}
