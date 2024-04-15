<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cats;
use App\Http\Controllers\Admin;




class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('cats.login', ['errorMessage' => null]);
    }
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    try {
        if (Auth::attempt($credentials, true, 'cats')) {
            $user = Auth::user(); // ログインしたユーザーを取得
            if ($user->role === 1) {
                // ユーザーが管理者である場合
                return redirect()->route('admin'); // 管理者ダッシュボードにリダイレクトする
            } else {
                // ユーザーが管理者でない場合
                return redirect()->route('index'); // 通常のダッシュボードにリダイレクトする
            }
        } else {
            return back()->withErrors(['email' => 'ログインに失敗しました']);
        }
    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::channel('login')->error($e->getMessage());
        return back()->withErrors(['email' => 'ログイン時にエラーが発生しました']);
    }
}


    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     try {
    //         if (Auth::attempt($credentials, true, 'cats')) {
    //             // dd($credentials);
    //             // ログイン成功時の処理
    //             return redirect()->route('index'); // 登録ページにリダイレクトする
    //         } else {
    //             return back()->withErrors(['email' => 'ログインに失敗しました']);
    //         }
    //     } catch (\Exception $e) {
    //         \Illuminate\Support\Facades\Log::channel('login')->error($e->getMessage());
    //         return back()->withErrors(['email' => 'ログイン時にエラーが発生しました']);
    //     }
    // }


 }


