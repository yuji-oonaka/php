<?php
// 配列とは
$height_1 = 162;
$height_2 = 171;
$height_3 = 178;
echo $height_1 . '<br>'. $height_2 . '<br>' . $height_3 .  '<br>';

$height[0] = 162;
$height[1] = 171;
$height[2] = 178;
echo $height[0] . '<br>'. $height[1] . '<br>' . $height[2] .  '<br>';
foreach ($height as $value) {
    echo $value . '<br>';
}

// 配列へ格納する
// $配列の変数名[キー] = 値;
$height[0] = 162;
// 配列から値を取得する
// $配列の変数名[キー]
// echo $height[0]. '<br>';
// デバック時など、配列全体を表示させる
// echo print_r($height) . '<br>';
// echo var_dump($height) . '<br>';

// 配列のキー　:整数と文字列が使える
// 整数：連続していなくてもOK
$age[0] = 20;
$age[3] = 33;
echo print_r($age). '<br>';
// 文字列：連想配列
$score['math'] = 50;
$score['English'] = 60;
echo print_r($score). '<br>';
// 変数を使ってキーを示す
$intkey = 5;
$age[$intkey] = 40;
echo print_r($age). '<br>';
$strkey = 'science';
$score[$strkey] = 90;
echo print_r($score). '<br>';

// キーの自動割り当て
$sport[] = 'baseball';
$sport[] = 'soccer';
echo print_r($sport). '<br>';
// すでに整数キーの割当がある場合は、最大キー +1が割り当てられる
$age[] = 55;
echo print_r($age). '<br>';

// 配列を初期化する
$friends =array();
$friends =[];
echo print_r($friends). '<br>';
// 値を入れて初期化
$pc = ['MacBook','iMac','IdeaPad'];
echo print_r($pc). '<br>';
// キーと値を入れて初期化
$friends = [
    'jesse'=> 'ジェシー',
    'michelle'=> 'ミシェル',
    'stephanie'=> 'ステファニー',
];
echo print_r($friends). '<br>';
echo $friends['michelle'].'<br>';

// 多次元配列
$engineers = [
    $engineer_1 = [
    'mark','steve', 'elon'
    ],   
    $engineer_2 = [
    'ゆうじ','じゅんいち','いさむ'
    ]
];
echo '<pre>';
echo print_r($engineers) . '<br>';
echo '<pre>';

echo $engineers[0][2] . '<br>';
echo $engineers[1][0] . '<br>';

// (例題)
// 次のエンジニアたちの名前と年齢が入った
// ２次元配列を１つ作って、その配列の中身をすべて表示させてください。
// 1️⃣名前：mark 年齢:37歳
// 2️⃣名前：steve 年齢56歳
// 3️⃣名前:elon 年齢50歳

$people = [
    $name = [
        'mark','steve','elon'
    ],
    $age = [
        '37','56','50'
    ]
];
echo '名前：'. $people[0][0] . ' 年齢：'. $people[1][0]. '歳'.'<br>';
echo '名前：'. $people[0][1] . ' 年齢：'. $people[1][1]. '歳'.'<br>';
echo '名前：'. $people[0][2] . ' 年齢：'. $people[1][2]. '歳'.'<br>';

// 答え
$engineers = [
    ['name' => 'mark', 'age' => 37],
    ['name' => 'steve', 'age' => 56],
    ['name' => 'elon', 'age' => 50]
];
echo '<pre>';
echo print_r($engineers);
echo '<pre>';
