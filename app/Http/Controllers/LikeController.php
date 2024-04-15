<?php

// LikeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        // ログインしているかどうかの確認（ユーザーがいいねするにはログインが必要）
        if (auth()->check()) {
            // いいねのデータをデータベースに保存
            Like::create([
                'user_id' => auth()->user()->id,
                'photo_id' => $request->photo_id,
            ]);

            // その他の処理（リダイレクトなど）を追加

            return redirect()->back()->with('success', 'いいねしました。');
        } else {
            // ログインしていない場合の処理
            return redirect()->back()->with('error', 'ログインが必要です。');
        }
    }
}

