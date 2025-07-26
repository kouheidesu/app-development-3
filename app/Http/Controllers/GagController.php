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
        [
            'text' => '財布はまるで迷路。入ったお金が二度と出てこないんだ。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_maze.png',
            'reference' => 'ノーマン・ロックウェル',
        ],
        [
            'text' => '貯金は性格を表すって言うけど、僕の貯金箱、ずっと空っぽで楽天的。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_optimistic.png',
            'reference' => 'ノーマン・ロックウェル',
        ],
        [
            'text' => '貯金箱は開けるまで夢が詰まってる。中身は…小銭の現実。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_little_money.png',
            'reference' => 'ジェシー・ウィルコックス・スミス',
        ],
        [
            'text' => '資産運用？俺は“とうもろこし”で分散してる。右手も左手もな！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_corn.png',
            'reference' => 'フィリップ・アレクサンダー・デ・ラースロー',
        ],
        [
            'text' => '“パンがなければケーキを食べればいい”って？こっちは“お金がなければ空気を食べればいい”状態だよ！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_air_eat.png',
            'reference' => 'オノレ・ドーミエ',
        ],
        [
            'text' => '貯金箱の中に夢を詰めた。硬貨は見当たらないけどね。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_no_coin.png',
            'reference' => 'ジャン＝バティスト・グルーズ',
        ],
        [
            'text' => 'この貯金袋？中身は…夢と希望（あと1円）。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_money_bineele.png',
            'reference' => 'グラント・ウッド',
        ],
        [
            'text' => '金運アップの秘訣？古着から“福袋”を縫い上げることさ！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_sew.png',
            'reference' => 'ノーマン・ロックウェル',
        ],
        [
            'text' => '投資のコツ？“損しない”より“損したと気づかない”ことさ。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_invest_knowhow.png',
            'reference' => 'ジョン・フレンチ・スローン',
        ],
        [
            'text' => '貯金が1枚の金貨だけ？でも彼いわく、“これ、僕の全財産であり、人生の輝き！”',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_one_coin.png',
            'reference' => 'ウィリアム・アドルフ・ブグロー',
        ],
        [
            'text' => 'コインの使い道？…うーん、パンにするか、記念にとっとくか…迷ってる間にインフレきそう！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_coin_infre.png',
            'reference' => 'ピエール＝オーギュスト・ルノワール',
        ],
        [
            'text' => 'お年玉…全部500円玉だったけど、積み上げたら“資産”っぽく見えてきた！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_five_houndreds.png',
            'reference' => 'メアリー・カサット',
        ],
        [
            'text' => '貯金のコツ？毎晩コインを積んで“資産のタワー”作ってるんだ。崩れなければ景気も安定！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_coin_tower.png',
            'reference' => 'ジャン＝フランソワ・ミレー',
        ],
        [
            'text' => 'この金貨、ピカピカすぎて鏡代わりにしてるんだ。“自己投資”ってやつさ！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_coin_clean.png',
            'reference' => 'カミーユ・ピサロ',
        ],
        [
            'text' => 'この金貨、使うより眺める方が“コスパ高い”気がしてきた！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_coin_see.png',
            'reference' => 'ギュスターヴ・クールベ',
        ],
        [
            'text' => '“貯金箱に投資してる”って言ったら、みんな笑ってたけど…今日も利子じゃなくて“利ス”が鳴いてるよ。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_risu.png',
            'reference' => 'ピエール・ボナール',
        ],
        [
            'text' => '“お金で幸せは買えない”って聞いたから、試しに“笑顔”だけ買ってみたら…レジの人が無料でくれた！',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_laugh_free.png',
            'reference' => 'エヴァ・ゴンザレス',
        ],
        [
            'text' => '“お金は天下の回りもの”って言うから財布を振ってみたけど…音すら回ってこなかった。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_no_sound.png',
            'reference' => 'トマ・クチュール',
        ],
        [
            'text' => '最近、ATMに“いつもありがとうございます”って言われるけど…こっちは“貯金ゼロ”で感謝されるだけの存在です。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_thanks_atm.png',
            'reference' => 'ジョージ・ルクス',
        ],
        [
            'text' => '“お金がない！”って叫んだら、机の引き出しから1円玉が出てきた。…まさかの“金の亡霊”登場。',
            'image' => 'https://app-development-3deve-production.up.railway.app/images/gag_app_one_money.png',
            'reference' => 'ホノレ・ドーミエ',
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
