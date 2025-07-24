<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GagController extends Controller
{
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
        [
            'text' => '家賃のために生きてるのか、生きるために家賃払ってるのか分からん。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_homefare.png',
            'reference' => 'ゴッホ',
        ],
        [
            'text' => '貯金ゼロで「人生を楽しんでる」って、ただの現実逃避じゃない？',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_tyokin_zero.png',
            'reference' => 'ピエール＝オーギュスト・ルノワール',
        ],
        [
            'text' => 'FXで一夜にして稼いだ。別の誰かが。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
            'reference' => 'フィンセント・ファン・ゴッホ',
        ],
        [
            'text' => '金がないと人が離れ、金があると虫が寄ってくる。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_money_effect.png',
            'reference' => 'フィンセント・ファン・ゴッホ',
        ],
        [
            'text' => 'カードの請求額、ホラー映画より怖い。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_holler.png',
            'reference' => 'ジェームズ・アンソール',
        ],
        [
            'text' => '給与明細がミステリー小説になってる。どこに消えた？俺の手取り。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_mistery.png',
            'reference' => 'ピエール＝オーギュスト・ルノワール',
        ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
        // ],
        //         [
        //     'text' => '犬が「ワンチャンあるかも」と言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        //     'reference' => '',
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
