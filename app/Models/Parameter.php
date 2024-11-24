<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{

    use HasFactory;

    public static function getParametersByCategoryId($categoryId)
    {
        return self::where('category_id', 'like', '%"' . $categoryId . '"%')->get();
    }

}
