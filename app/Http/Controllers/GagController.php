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
        // gag.blade.phpを表示
        return view('gag');
    }

    // $randomGag変数に$gags変数の中身をランダムにとってきて代入
    // 戻り値として$gag変数の中身を$randomGagに入れる？

    // $requestはRequestクラスのインスタンス
    public function showGag(Request $request)
    {
        // ランダムでgagsから取得した配列の文字列を取得
        $randomGag = $this->gags[array_rand($this->gags)];
        // $randomGag変数を渡す&gag.blade.phpを表示
        return view('gag', ['gag' => $randomGag]);
    }
}
