<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'path',
        'product',
        'cost',
        'description',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
