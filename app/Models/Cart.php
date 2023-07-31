<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts3';

    public $timestamps = false;

    // 登録可能なcolumnの指定
    protected $fillable =
    ['name','price','quantity',];
}
