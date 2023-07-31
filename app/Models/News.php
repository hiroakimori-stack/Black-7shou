<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\News;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class News extends Model
{
    use HasFactory;

    public $table = 'news';

    // public $timestamps = false;

    // 登録可能なcolumnの指定
    protected $fillable =
    ['info','detail','image',];
}
