<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'thumbnail',
        'hero_image',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productSpecifications()
    {
        return $this->hasMany(ProductSpecification::class);
    }
}
