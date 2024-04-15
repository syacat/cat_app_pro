<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyPageImage extends Model
{
    use HasFactory;

    protected $table = 'likes'; // likesテーブルを指定

    protected $fillable = [
        'image_path',
    ];
}
