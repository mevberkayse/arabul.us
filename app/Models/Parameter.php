<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    protected $fillable = [
        'parameter_name',
        'parameter_value',
        'category_ids'
    ];

    protected $casts = [
        'category_ids' => 'json'
    ];

    public static function getParametersByCategoryId($categoryId)
    {
        try {
            return self::where('category_ids', 'like', '%' . $categoryId . '%')->get();
        } catch (\Exception $e) {
            return collect([]);
        }
    }
}
