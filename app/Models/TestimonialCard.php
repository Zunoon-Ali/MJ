<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'testimonial',
        'image',
        'order'
    ];

    // Default ordering
    protected static function booted()
    {
        static::addGlobalScope('order', function ($query) {
            $query->orderBy('order', 'asc');
        });
    }
}
