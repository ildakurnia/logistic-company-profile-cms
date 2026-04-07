<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'title',
        'subtitle',
        'hero_image',
        'order_number',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
