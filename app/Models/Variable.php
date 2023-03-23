<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variable extends Model
{
    use HasFactory;
    protected $table= 'product_variables';
    protected $fillable = [
        'product_id',
        'attribute_id',
        'stock',
        'description',
        'image',
        'regular_price',
        'sale_price',
        'discount',
    ];
    
    public function Attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
