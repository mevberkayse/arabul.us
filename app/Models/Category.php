<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'name',
        'parent_id'
    ];

    public function getParentCategory()
    {
        return $this->parent_id == 0 ? $this : Category::where('id', $this->parent_id)->first();
    }

    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function hasSubCategories()
    {
        return $this->subCategories()->exists();
    }

    public function getSubCategories()
    {
        return $this->subCategories;
    }

    public function getListingCount()
    {
        if ($this->parent_id == 0 || $this->hasSubCategories()) {
            $subcategories = $this->getSubCategories();
            $subcategories = $subcategories->pluck('id');
            return Listing::whereIn('category_id', $subcategories)->count();
        }

        return Listing::where('category_id', $this->id)->count();
    }

    public function getParameters()
    {
        // Fetch parameters directly matching the category
        $params = Parameter::whereJsonContains('category_ids', $this->id)->get();

        // Fetch general parameters (category_ids = [-1])
        $generalParams = Parameter::whereJsonContains('category_ids', -1)->get();

        // Combine both sets of parameters
        return $params->merge($generalParams);
    }

}
