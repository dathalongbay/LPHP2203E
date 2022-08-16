<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbcController;
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

// dấu / trong url đại diện trang chủ trong laravel
Route::get('/', function () {
    return view('welcome1');
});

// khai báo 1 router mới
// đối số 1 là uri
// đối số thứ 2 là hàm vô danh
// những hàm dùng 1 lần duy nhất thì ở đây dùng hàm vô danh
Route::get('/abc', function () {
    // truyền đường dẫn của view vào trong hàm view() của laravel
    // hàm view() là hàm có sẵn trong laravel
    return view('abc');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/demo1',[AbcController::class, 'index']);
