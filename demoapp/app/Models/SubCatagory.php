<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCatagory extends Model
{
    use HasFactory;

    protected $fillable = [
        'catagory',
        'subcatagory',
        'catagory_status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
