<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'cat_id',
        'product_code',
        'product_price',
        'product_details',
        'product_size',
        'product_image',
    ];
}
