<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return 'こんにちは、Laravel！';
// });

Route::get('/sample', function () {
    return view('sample.index');
});


Route::get('/test.php', function () {
    return 'こんばんは、Laravel！';
});
