<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'preferred_name',
        'email',
        'phone_number',
        'last_education',
        'university',
        'major',
        'experience',
        'country',
        'department',
        'cv_file',
    ];
}
