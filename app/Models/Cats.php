<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cats extends Model implements Authenticatable
{
    use AuthenticatableTrait, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image_path',  // 画像の保存パス
        'caption',     // 画像の説明やキャプション
    ];
    public function photos()
    {
        return $this->hasMany(Photo::class, 'cat_id'); // 'cat_id'は外部キー
    }
}



