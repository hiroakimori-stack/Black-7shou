<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Item;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Item extends Model{

    use HasFactory;

    public $timestamps = false;

    // 登録可能なcolumnの指定
    protected $fillable =
    ['name','detail','image','price','quantity',];
}