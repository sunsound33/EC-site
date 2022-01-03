<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Store extends Model
{
    use HasFactory, HasApiTokens;
    public $timestamps = false; //timesatampを利用しない
    protected $fillable = [
        'product_id',
        'product_name',
        'product_description',
        'price',
        'img',
        'type'
    ];
}
