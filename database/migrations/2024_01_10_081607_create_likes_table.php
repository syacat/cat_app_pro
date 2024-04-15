<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // users テーブルへの外部キー
            $table->foreignId('cat_id')->nullable()->constrained(); // cats テーブルへの外部キー (nullable)
            $table->foreignId('photo_id')->nullable()->constrained(); // photos テーブルへの外部キー (nullable)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('likes');
    }
}

