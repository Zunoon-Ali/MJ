<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPageContent extends Model
{
    use HasFactory;

    protected $fillable = [
        // Banner Slider Fields
        'slider1_tagline',
        'slider1_h2',
        'slider1_p',
        'slider2_tagline',
        'slider2_h2',
        'slider2_p',
        'slider3_tagline',
        'slider3_h2',
        'slider3_p',

        // About Section Fields
        'about_tagline',
        'about_h2',
        'about_p',
        'about_link',
        'about_img',
    ];
}
