<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RepasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index'])->name('index');

/*お問い合せ*/ 
Route::view('/contact', '/contact.contact');
Route::view('/complete', '/contact.complete');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'contact']);
Route::post('/confirm', [App\Http\Controllers\ContactController::class, 'confirm']);
Route::post('/complete', [App\Http\Controllers\ContactController::class, 'create']);

/*ログインと新規登録*/ 
Route::view('/register', '/register');
Route::view('/admin/login', '/admin/login');
Route::group(['middleware' => ['guest']], function() {
    // 新規処理
    Route::post('/register', [LoginController::class, 'register'])->name('register.store');

    // ログインページ
    Route::get('/login', [LoginController::class, 'showLoginPage'])->name('login.show');
    // ログイン処理
    Route::post('/login', [LoginController::class, 'actionLogin'])->name('login.action');
    // ログイン処理
    Route::post('/admin/login', [LoginController::class, 'adminLogin'])->name('login.admin');
});

//ログアウト機能
Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', [LoginController::class, 'actionLogout'])->name('logout.action');
});

//パスワードリセット機能
Route::get('/password/reset', 'RepasswordController@showResetForm')->name
('password.reset');
Route::post('/password/reset', 'RepasswordController@resetPassword')->name
('reset.password');

//商品管理機能
Route::get('/admin/item-index', [ItemController::class, 'index'])->name('index');
Route::get('/admin/item-insert', [ItemController::class, 'insert'])->name('insert');
Route::resource('item', ItemController::class);
Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->name('admin');
Route::post('/itemdestroy{id}', [App\Http\Controllers\ItemController::class, 'destroy'])->name('itemdestroy');
Route::get('/admin/item-edit/{item}', [ItemController::class, 'edit'])->name('itemedit');
Route::put('/admin/item-edit/{item}', [App\Http\Controllers\ItemController::class, 'update'])->name('itemupdate');
Route::post('update/{item}', [ItemController::class, 'updateConfirm'])->name('update.confirm');

//ニュース管理機能
Route::get('/admin/news-insert', [NewsController::class, 'insert'])->name('news.insert');
Route::post('/admin/news-insert', [NewsController::class, 'store'])->name('news.store');
Route::post('/newsdestroy{id}', [NewsController::class, 'destroy'])->name('newsdestroy');
Route::get('/admin/news-edit/{news}', [NewsController::class, 'edit'])->name('newsedit');
Route::put('/admin/news-edit/{news}', [NewsController::class, 'newsupdate'])->name('news.update');

// ユーザー情報
Route::get('/user-profile', [App\Http\Controllers\UserController::class, 'userprofile'])->name('userprofile');

// 商品購入
Route::get('/item-buy/{item}', [ItemController::class, 'show'])->name('itembuy.show');
Route::get('/cart', [UserController::class, 'show'])->name('cart.show');
Route::post('/insert-cart', [App\Http\Controllers\UserController::class, 'insertCart'])->name('insertCart');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/user/item-all', [ItemController::class, 'itemall'])->name('item.all');
    Route::get('/user/news-all', [HomeController::class, 'newsall'])->name('news.all');
});