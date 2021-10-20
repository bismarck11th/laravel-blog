<?php

use Illuminate\Support\Facades\Route;

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

/*
[ ルーティング書き方 ]
Route::get('blogs', 'BlogController@showList');

Route          -> Laravelの既存機能のRouteファサードを使う
get            -> HTTPメソッドを指定
blogs          -> 任意のURLを指定
BlogController -> 作ったControllerを指定
@showList      -> Controllerのメソッド名を指定

[ ファサードとは? ]
参考 https://qiita.com/minato-naka/items/095f2a1beec1d09f423e

ファサードとは、
クラスをインスタンス化しなくてもstaticメソッドのように
メソッドを実行できるようにしてくれる機能のこと。

通常
$classA = new ClassA();
$classA->methodA();

ファサード利用
FacadeClassA::methodA();
このインスタンス化している１行の手間をなくせるっていうだけっちゃだけですかね。
*/

// ブログ一覧画面
Route::get('', 'BlogController@showList')->name('blogs');

