<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'regular_price',
        'sale_price',
        'stock',
        'status',
        'count_order',
        'rating',
        'author',
        'product_type',
        'reference_product',
        'tax',
        'ship',
        'type',
        'is_attribute',
    ];
}
