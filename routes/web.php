<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return 'こんにちは、Laravel！';
});


Route::get('/test.php', function () {
    return 'こんばんは、Laravel！';
});
