<?php

// app/Models/Photo.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{
    use HasFactory;
    protected $table = 'photos';

    protected $fillable = [
        'image_path',
        'caption',
    ];

    public static function createPhoto($image, $caption)
    {
        $imagePath = $image->store('uploads/cats', 'public');

        return self::create([
            'image_path' => $imagePath,
            'caption' => $caption,
        ]);
    }
}

