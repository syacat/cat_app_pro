<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\AdminController;
use App\Models\Cats;
use App\Models\Photo;
use App\Models\MyPageImage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// viewを表示
Route::get('/', 'CatsController@index')->name('index');
Route::get('/cats/header', function () {
    return view('cats.header');
  });
// ログインフォームを表示
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// 新規登録フォームを表示
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// 新規登録成功
Route::get('/cats/index', [RegisterController::class, 'showRegistrationSuccess'])->name('cats.index');

// ログイン処理
Route::post('/login', [LoginController::class, 'login']);
// ホームにリダイレクト
Route::get('/cats/index', [LoginController::class, 'index'])->name('cats.index');

// web.php
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
// ログアウトフォームを表示
Route::get('/logout', [LogoutController::class, 'showLogoutForm'])->name('logout');

// 画像投稿ページを表示
Route::get('/cats/create', [CatsController::class, 'create'])->middleware('auth')->name('cats.create');
// 画像の投稿処理
Route::post('/cats', [CatsController::class, 'store'])->middleware('auth')->name('cats.store');

// likeControllerを使う
Route::post('/like', [LikeController::class, 'store'])->name('like.store');

// admin.blade.phpの表示
Route::get('/cats/admin', [AdminController::class, 'index'])->name('admin');

// delete機能(論理削除)
Route::delete('/photos/{id}', [AdminController::class, 'deletePhoto'])->name('photo.delete');
Route::delete('/cats/{id}', [AdminController::class, 'deleteCat'])->name('cat.delete');

Route::post('/save-to-mypage', 'CatsController@saveToMyPage')->name('save-to-mypage');

Route::get('/mypage', 'CatsController@mypage')->name('mypage');

Route::post('/save-to-mypage', [CatsController::class, 'saveToMyPage'])->name('save-to-mypage');


// マイページを表示
Route::get('/mypage', 'CatsController@mypage')->name('mypage');

// routes/web.php
Route::post('/mypage', 'CatsController@saveToMyPage')->name('mypage.save');









