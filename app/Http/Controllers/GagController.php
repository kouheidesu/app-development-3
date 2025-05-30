<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GagController extends Controller
{
    private $gags = [
        '犬がワンと言った！',
        'カエルがケロッと笑った！',
        'ゴリラがグーでパンチ！',
        'イカが怒ったイカってる！',
        'ラーメンつるつるつるまい！',
    ];

    public function index()
    {
        return view('gag');
    }

    public function showGag(Request $request)
    {
        $randomGag = $this->gags[array_rand($this->gags)];
        return view('gag', ['gag' => $randomGag]);
    }
}
