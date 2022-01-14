<?php

use Illuminate\Support\Facades\Route;

// ルートの設定はroutes/auth.phpに書き込む
// コントローラーのパス指定も
use App\Http\Controllers\ComponentTestController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// ↓追記: コントローラーのテスト

// コントローラーを制作するコマンド
// Routeと
// php artisan make:controller コントローラー名

// Routeの設定
// Route::get('パス', [app/Http/Controllersのファイル名::class, 'メソッド名']);
Route::get('/component-test1', [ComponentTestController::class, 'showComponent1']);
Route::get('/component-test2', [ComponentTestController::class, 'showComponent2']);


// 追記 ここまで

require __DIR__.'/auth.php';
