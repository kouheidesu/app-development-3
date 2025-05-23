<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

Route::get('/logtest', function () {
    Log::debug('ログテスト：これは書かれていますか？');
    return 'ログ出力しました';
});

Route::get('/', function () {
    return view('index', ['name' => '耕平さん']);
});

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/test.php', function () {
    return 'こんばんは、Laravel！';
});
