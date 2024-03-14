<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCatagory extends Model
{
    use HasFactory;

    protected $fillable = [
        'catagory',
        'catagory_status',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
