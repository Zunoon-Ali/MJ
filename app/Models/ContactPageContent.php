<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPageContent extends Model
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

        // Contact Section Fields
        'contact_tagline',
        'contact_h2',
        'contact_p',
        'contact_link',

        // Testimonials Section Fields
        'testi_h2',
        'testi_p',
    ];
}
