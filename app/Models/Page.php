<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function sliders()
    {
        return $this->hasMany(Slider::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
