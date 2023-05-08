<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedding13 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
        'galery' => 'array',
        'fotoSampul' => 'array',

    ];
}
