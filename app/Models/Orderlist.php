<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_order', 
        'id_product', 
        'quantity',
        'price',
        'id_user'
    ];
}
