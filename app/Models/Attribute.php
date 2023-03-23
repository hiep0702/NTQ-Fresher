<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'term_id',
        'value',
    ];

    public function variable()
    {
        return $this->hasMany(Variable::class);
    }
}
