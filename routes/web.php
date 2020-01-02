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

/*** auth and the others ***/

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();


/***   ***/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', function () {
    return redirect(route('home'));
});

Route::get('/sales', function () {
    return view('sales');
})->name('sales');

Route::get('/api', function () {
    return '{
    "term": 1576746901000,
    "date": {
        "date": 19,
        "day": 4,
        "hours": 0,
        "minutes": 0,
        "month": 11,
        "seconds": 0,
        "time": 1576681200000,
        "timezoneOffset": -540,
        "year": 119
    },
    "lectures": [
        {
            "lecture_id": "6522",
            "lecture_name": "並列・分散処理",
            "responsible_person": "石畑 宏明",
            "url": "https://service.cloud.teu.ac.jp/moodle3/course/view.php?id=17641",
            "is_temp": false,
            "period": "hachioji3",
            "room_name": "研究棟Ａ４０３",
            "is_active": true,
            "is_accept_attendance": true,
            "role": "STUDENT",
            "begin_time": 1576728600000,
            "end_time": 1576734300000,
            "status": "ATTENDING"
        },
        {
            "lecture_id": "6840",
            "lecture_name": "OSの設計と実装",
            "responsible_person": "田胡 和哉",
            "url": "https://service.cloud.teu.ac.jp/moodle3/course/view.php?id=17639",
            "is_temp": false,
            "period": "hachioji5",
            "room_name": "研究棟Ａ４０２",
            "is_active": true,
            "is_accept_attendance": true,
            "role": "STUDENT",
            "begin_time": 1576741200000,
            "end_time": 1576746900000,
            "status": "NONE"
        },


        {
            "lecture_id": "6757",
            "lecture_name": "英語インテンシブIV [7]",
            "responsible_person": "奈古 明子",
            "url": "https://service.cloud.teu.ac.jp/moodle3/course/view.php?id=17265",
            "is_temp": false,
            "period": "hachioji1",
            "room_name": "講義実験棟４０１",
            "is_active": true,
            "is_accept_attendance": true,
            "role": "STUDENT",
            "begin_time": 1576713300000,
            "end_time": 1576719000000,
            "status": "ATTENDING"
        }
    ]
}
';
});
