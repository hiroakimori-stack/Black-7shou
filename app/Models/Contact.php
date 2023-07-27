<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // 登録可能なcolumnの指定
    protected $table = 'contacts';
    protected $fillable = 
    [
        'name',
        'email',
        'tel',
        'body',
    ];
    public $timestamps = false;
}
