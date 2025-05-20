<?php
$score = 100;
$score_sum = $score * 100;
$fruits = ["りんご", "バナナ", "みかん"];

for ($i = 0; $i < 5; $i++) {
    echo ($score_sum) . "\n";
    echo $score_sum;
    // if ($i = 1) {
    //     print_r($fruits);
    // }
}
var_dump($score);
echo gettype($score);

require 'vendor/autoload.php'; // Composerのautoloadを読み込む

use Carbon\Carbon;

$today = Carbon::today();

for ($i = 0; $i < 7; $i++) {
    echo $today->copy()->addDays($i)->toDateString() . "<br>";
}
