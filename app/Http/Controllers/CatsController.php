<?php
// CatsController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cats;
use App\Models\Photo;
use App\Models\MyPageImage; 

class CatsController extends Controller
{
        public function index()
        {
            $cats = Cats::all();
            $photos = Photo::all();
            return view('cats.index', ['cats' => $cats,'photos' => $photos]);
        }
        public function create()
        {
            return view('cats.create');
        }
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'caption' => 'nullable|string',
            ]);
            // 画像の保存先パスを生成
            $imagePath = $request->file('image')->store('uploads/cats', 'public');
            // Photo モデルを使用して写真を作成
            Photo::create([
                'name' => $request->name,
                'image_path' => $imagePath,
                'caption' => $request->caption,
            ]);
            return redirect('/')->with('success', '画像がアップロードされました。');
        }
        public function mypage()
        {
            // MyPageImage モデルからすべての画像を取得
            $mypageImages = MyPageImage::all();
            
            // ビューに変数を渡してマイページを表示
            return view('cats.mypage', ['mypageImages' => $mypageImages]);
        }

        public function saveToMyPage(Request $request)
        {
            $request->validate([
                'image_path' => 'required', // バリデーションルールを修正
            ]);
        
            // マイページに保存する画像のパスを取得
            $imagePath = $request->image_path;
        
            // MyPageImage モデルを使用して画像を保存
            MyPageImage::create([
                'image_path' => $imagePath,
            ]);
        
            return response()->json(['message' => '画像がマイページに保存されました。'], 200);
        }

}
