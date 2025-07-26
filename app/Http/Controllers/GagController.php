<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GagController extends Controller
{
    private $gags = [
        // [
        // 'text' => '犬が「ワンチャンあるかも」と言った！',
        // 'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dog.png',
        // 'reference' => '',
        // ],
        // [
        // 'text' => 'カエルがジャンプした先が回転寿司！',
        // 'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_kaeru2.png',
        // 'reference' => 'ピカソ',s
        // ],
        // [
        //     'text' => 'ゴリラがバナナでスベった！バナナだけに！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_gorira2.png',
        //     'reference' => 'レオナルド・ダ・ヴィンチ',
        // ],
        // [
        //     'text' => 'イカが怒ってイカり肩！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_ika2.png',
        //     'reference' => 'ムンク',
        // ],
        // [
        //     'text' => 'ラーメンがすすりすぎて宇宙へワープ！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_ramen3.png',
        //     'reference' => 'ゴーギャン',
        // ],
        // [
        //     'text' => 'ペンギンが冷房つけて「寒っ！」って言った！',
        //     'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_pengin.png',
        //     'reference' => 'ミケランジェロ',
        // ],
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
            'reference' => 'ルノワール',
        ],
        [
            'text' => 'FXで一夜にして稼いだ。別の誰かが。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_fx.png',
            'reference' => 'ゴッホ',
        ],
        [
            'text' => '金がないと人が離れ、金があると虫が寄ってくる。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_money_effect.png',
            'reference' => 'ゴッホ',
        ],
        [
            'text' => 'カードの請求額、ホラー映画より怖い。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_holler.png',
            'reference' => 'ジェームズ・アンソール',
        ],
        [
            'text' => '給与明細がミステリー小説になってる。どこに消えた？俺の手取り。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_mistery.png',
            'reference' => 'ルノワール',
        ],
        [
            'text' => '「人生、お金じゃない」って言えるのは、だいたい金持ち。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_rich.png',
            'reference' => 'ルノワール',
        ],
        [
            'text' => 'お金？あるよ。墓まで持っていく予定さ。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_grave.png',
            'reference' => 'ルノワール',
        ],
        [
            'text' => 'お金持ちは「貧乏って大変そうだね」って言うけど、火の中にいる人に「熱そうだね」って言ってるのと同じ。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_rich_talk.png',
            'reference' => 'ジャン＝フランソワ・ラファエリ',
        ],
        [
            'text' => '資産運用？死神とポーカーしてるようなもんさ。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_deather_poker.png',
            'reference' => 'レンブラント',
        ],
        [
            'text' => '金に魂売ったけど、安売りだったらしい。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_soul_buy.png',
            'reference' => 'フランシスコ・デ・ゴヤ',
        ],
        [
            'text' => 'お金は使い方次第で、ただの紙にも、未来への切符にもなる。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_use_way.png',
            'reference' => 'ルノワール',
        ],
        [
            'text' => 'お金は天下の回りもの。でも僕の財布だけ、回避してるらしい。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_aroud_world.png',
            'reference' => 'ルノワール',
        ],
        [
            'text' => 'お金は数えるより、感謝した方が増えるらしい。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_thanks.png',
            'reference' => 'ルノワール',
        ],
        [
            'text' => 'この豚、貯金箱って言うけど…中身よりフォルムが可愛いから許した。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_money_box.png',
            'reference' => 'ジャン＝バティスト・グルーズ',
        ],
        [
            'text' => '俺の貯金、笑顔と空気だけは詰まってる',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_laugh.png',
            'reference' => 'エドゥアールト・フォン・グリュッツナー',
        ],
        [
            'text' => '貯金はないけど、癒し担当としては資産価値あるって言われたニャ。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_cure_cut.png',
            'reference' => 'ウィリアム・アドルフ・ブグロー',
        ],
        [
            'text' => '“貯金ゼロ”と笑う君へ。僕の貯金、チョコの包み紙より軽いけど夢は重いよ。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_dream_boy.png',
            'reference' => 'ノーマン・ロックウェル',
        ],
        [
            'text' => 'この1円、きっとプレミアついてる…はず！老眼でも信じたい投資価値！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_siner.png',
            'reference' => 'カミーユ・ピサロ',
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
