<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    protected $table= 'product_variables';
 
    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'count_product',
    ];
}
