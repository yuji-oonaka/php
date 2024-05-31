<?php
// forreach文
// foreach ($配列の変数　as $変数) {
//      実行内容; 
// }
$friendsList = ['ジェシー', 'ミシェル', 'ステファニー'];
foreach ($friendsList as $friend) {
    echo $friend. '<br>';
}
// 1️⃣配列 $friendsListから、要素[ジェシー]を取り出して変数$friendに代入
// 2️⃣変数 $friend の値[ジェシー]を表示
// 3️⃣配列 $friendsListから、要素[ミシェル]を取り出して変数$friendに代入
// 4️⃣変数 $friend の値[ミシェル]を表示
//・
//・
//・ 
// 配列の最後まで繰り返す

// foreachできーを利用する
// foreach($配列の変数　as $キーの変数　=> $変数) {
//      実行内容;
// }
$friendsList = ['ジェシー', 'ミシェル', 'ステファニー'];
foreach ($friendsList as $key => $friend) {
    if($key === 0) {
        echo $friend. 'と買い物に行きます<br>';
    }
}
// 連想配列が(keyが文字列)のケース　 YouTube 2:43:00
$friendsList = [
    'jesse'=> 'ジェシー',
    'michelle'=> 'ミシェル',
    'stephanie'=> 'ステファニー',
];
foreach ($friendsList as $key => $friend) {
    if ($key === 'michelle') {
        echo $friend. 'と買い物に行きます<br>';
    }
}

// foreach文で配列の各要素の値を変える
$fruitsList = [
    'apple' => 100,
    'banana' => 40,
    'orange' => 30
];
// foreach($fruitsList as &$fruit) {
    // $fruit = $fruit * 0.9;
    // $fruit *= 0.9;省略形↑
// }
echo print_r($fruitsList). '<br>';
foreach ($fruitsList as $key =>$fruit) {
    $fruitsList[$key] *=0.9;
}
echo print_r($fruitsList). '<br>';

// foreach文　繰り返しの中で繰り返し
// ３次元配列
$engineersList = [
    'overseas' => [
        ['マーク', 37],
        ['スティーブ', 56],
        ['イーロン', 50]
    ],
    'japanese' => [
        ['ゆうじ',43],
        ['じゅんいち',31],
        ['いさむ',41]
    ]
];
foreach ($engineersList as $engineerskind){
    foreach($engineerskind as $engineers){
        echo $engineers[0]. 'は'. $engineers[1]. '歳です<br>';
    }
}