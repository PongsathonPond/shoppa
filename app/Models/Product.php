<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'total',
        'description',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',

    ];
}
