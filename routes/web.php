<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('index');
// });


// Route::get('/', function () {
//     return view('index', ['name' => '耕平さん']);
// });

Route::get('/', function () {
    return print("hello world");
});


Route::get('/test.php', function () {
    return 'こんばんは、Laravel！';
});
