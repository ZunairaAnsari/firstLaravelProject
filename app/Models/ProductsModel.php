<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'id',
        'product-name',
        'product-description',
        'product-image',
        'multiple-images',
        'product-price'
    ];
}
