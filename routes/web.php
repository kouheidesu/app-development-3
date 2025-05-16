<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});


Route::get('/test.php', function () {
    return 'こんばんは、Laravel！';
});
