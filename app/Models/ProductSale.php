<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{

    protected $table = 'product_sale';

    use HasFactory;

    protected $fillable = [
        'product_id',
        'sale_id',
        'quantity',
        'price',
    ];
}
