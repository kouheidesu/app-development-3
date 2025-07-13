<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GagController extends Controller
{
    // private $gags = [
    //     '犬が「ワンチャンあるかも」と言った！',
    //     'カエルがジャンプした先が回転寿司！',
    //     'ゴリラがバナナでスベった！バナナだけに！',
    //     'イカが怒ってイカり肩！',
    //     'ラーメンがすすりすぎて宇宙へワープ！',
    //     'ペンギンが冷房つけて「寒っ！」って言った！',
    //     '寿司が自分を握って自己満足！',
    //     '猫がキャットフード食べて「にゃ〜イス！」',
    //     'ゾウが鼻で書道して「象形文字」完成！',
    //     'カラスが黒板でキーキー！教育熱心！',
    //     'サルがバナナにプロポーズ！「君にむけて熟したんだ」',
    //     'タコがボンジュールって言った！オクトパリジャン！',
    //     'パンダが白黒つけようと裁判官に！',
    //     'カニが横から失礼！って言いながら真っ直ぐ歩く！',
    //     'ウサギがぴょんぴょんしすぎて月に到着！',
    //     'カメがレースで優勝！相手が寝坊！',
    //     'ハトが豆鉄砲食らって「想定内です」！',
    //     'サメがフカく反省してる…フカだけに！',
    //     'タヌキが変身しようとしてスマホ見てた！',
    //     'イヌが「ワンチャン」ってLINEスタンプ作ってる！',
    //     'トリが朝寝坊して「コケコッコー…ごめん」',
    //     'カエルが自分の声で目覚めた！ケロ目覚まし！',
    //     '馬が走って「今日もギャロップ！」',
    //     'アリが団体行動しすぎて渋滞発生！',
    //     'ヘビが長電話してコードと間違われた！',
    //     'ハムスターが回し車で発電！エコ！',
    //     'モグラがサングラスして地上デビュー！',
    //     'ヒツジが眠れずに自分を数えてる！',
    //     'ライオンがカラオケで「ガオ〜ン！」と熱唱！',
    //     'イルカがジャンプしてWi-Fi拾った！',
    // ];

    private $gags = [
        [
            'text' => '犬が「ワンチャンあるかも」と言った！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
            'reference' => '',
        ],
        [
            'text' => 'カエルがジャンプした先が回転寿司！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_kaeru2.png',
            'reference' => 'ピカソ',
        ],
        [
            'text' => 'ゴリラがバナナでスベった！バナナだけに！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_gorira2.png',
            'reference' => 'レオナルド・ダ・ヴィンチ',
        ],
        [
            'text' => 'イカが怒ってイカり肩！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_ika2.png',
            'reference' => 'ムンク',
        ],
        [
            'text' => 'ラーメンがすすりすぎて宇宙へワープ！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_ramen3.png',
            'reference' => 'ゴーギャン',
        ],
        [
            'text' => 'ペンギンが冷房つけて「寒っ！」って言った！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_pengin.png',
            'reference' => 'ミケランジェロ',
        ],
        [
            'text' => '給料は、希望と共に振り込まれて、絶望と共に消えていく。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_zetubou.png',
            'reference' => 'フェルメール',
        ],
        [
            'text' => '住宅ローンって、人生という名の手錠だよね。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_homeroan.png',
            'reference' => 'ドラクロワ',
        ],
        [
            'text' => '自販機の釣り銭に運命感じるようになったら、もう末期。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_automachine.png',
            'reference' => 'ベラスケス',
        ],
        [
            'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
            'reference' => 'ヒエロニムス・ボス',
        ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],
        // [
        //     'text' => '宝くじ当たったら人生変わるって思ってる時点で、もう人生終わってる説。',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_takarakugi.png',
        // ],

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
        return view('gag', [
            'text' => $randomGag['text'],
            'image' => $randomGag['image'],
            'reference' => $randomGag['reference'] ?? null,
        ]);
    }
    public function sample() {}
}
