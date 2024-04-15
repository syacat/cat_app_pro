<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cats;
use App\Models\Photo;

class AdminController extends Controller
{
    public function index()
    {
        $cats = Cats::all();
        $photos = Photo::all();

        return view('cats.admin', compact('cats', 'photos'));
    }
    public function deletePhoto($id)
    {
        $photo = Photo::findOrFail($id);
        $photo->delete();
        return redirect()->back()->with('success', '写真が削除されました');
    }
    public function deleteCat($id)
    {
        $cat = Cats::findOrFail($id);
        $cat->delete();
        return redirect()->back()->with('success', 'ユーザーが削除されました');
    }
}
