<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\GagController;

Route::get('/logtest', function () {
    Log::debug('ログテスト：これは書かれていますか？');
    return 'ログ出力しました';
});
// これはcontrollerを返す
Route::get('/', [GagController::class, 'index']);
Route::post('/gag', [GagController::class, 'showGag']);

// これはviewsを返す
Route::get('/sample', function () {
    return view('sample');
});

Route::get('/test.php', function () {
    return 'こんばんは、Laravel！';
});

Route::get('/gag', function () {
    return view('gag'); // resources/views/gag.blade.php を表示
})->name('gag');
