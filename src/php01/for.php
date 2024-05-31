<?php
// for文
// for (初期化式; 判定式; 変化式) {
//     実行内容
// }
for ($num = 0; $num < 6; $num++) {
    echo $num. '<br>';
}
// 1️⃣初期：$num=0→　判定；0は6より小さい　→0表示
// 2️⃣変化：+1変化して $num=1 →判定：1は6より小さい→1表示
// ・
// ・
// ・
// 6️⃣変化：+1変化して$num=5 →判定：5は6より小さい→5表示
// 7️⃣変化：+1変化して$num=6 →判定：6は6より小さくない→終了！

// breakとは
$money = 0;
for ($hour = 1; $hour <=8; $hour++) {
    $money = $hour * 1000;
    if ($money > 5000) {
        echo '現在' . $hour. '時間働いて'. $money. '円です。5000円以上分働いたので退勤します。<br>';
        break;
    }
    echo '現在' . $hour. '時間働いて'. $money. '円です。<br>';
}
// 繰り返しの中で繰り返し
$money = 0;
$rest = 0;
 for ($hour = 0; $hour <=8; $hour++) { //時間のループ　９回
    $money = $hour * 1000;
    for ($i = 1; $i <= 2; $i++) { //休憩のループ　２回
        $rest++;
        if ($rest > 10){
            echo '現在' . $rest. '回休憩して'. $money. '円です。退勤します。<br>';
            break 2;
        }
    }
     echo '現在' . $hour. '時間働いて'. $money. '円です。<br>';
}
// continueとは？
// 残業チェッカー：８時間未満＝残業ではない
            //    ８時間以上＝残業中 
for ($hour = 1; $hour <= 10; $hour++) {
    if ($hour >= 8) {
        echo '現在'. $hour. '時間働きました。残業中です。<br>';
        continue;
    }
    echo '現在'. $hour. '時間労働。まだ残業中ではありません！<br>';
}