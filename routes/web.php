<?php

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

Route::get('/ceshi', function () {
    $data = \Illuminate\Support\Facades\DB::table('power_type')->get();
    dd($data);
});

Route::get('/redis_ceshi', function () {

    $goodsId = 123231;
    $maxNumber = 15;
    $userID = $_GET['id'];

    if (Redis::get('goods:' . $goodsId . ':try') === 'false') {
        return false;
    }

    $number = Redis::lPush('goods:' . $goodsId, $userID);

    if ($number <= $maxNumber) {
        return true;
    } else {
        Redis::set('goods:' . $goodsId . ':try', 'false');
        return false;
    }

});


Route::get('/redis_ceshi_html', function () {
    return view('redis');
});


