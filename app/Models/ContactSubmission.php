<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
