<?php
$age = 43;
if($age > 40) {
    echo '祐二は40歳より年上'. '<br>';
}
$num = 1;
if ($num) {
    echo 'trueです!'. '<br>';
}
$year =2024;
if($year ===2024) {
    echo '今年が2024年です!<br>';
}
// 論理演算子
$education = '高学歴';
$income = '低収入';
if($education === '高学歴' || $income ==='高収入') {
    echo 'この人と結婚したい！<br>';
}

// if..else..文
$age = 43;
if($age >=30) {
    echo '祐二は30歳より年上<br>';
}else {
    echo '祐二は30歳より年下<br>';
}
$education = '低学歴';
$income = '低収入';
$height = '低身長';
if ($education === '高学歴') {
    echo "高学歴のこの人と結婚したい！<br>";
    }elseif ($income === '高収入') {
    echo "高収入のこの人と結婚したい！<br>";    
    }elseif ($height === '高身長') {
    echo "高身長のこの人と結婚したい！<br>";    
    }else {
    echo 'この人と結婚したくない！<br>';
}
$area = 'ロンドン';
switch ($area) {
    case "ロンドン":
        echo 'イギリスです<br>';
        break;
    case "カリフォルニア":
        echo 'アメリカです<br>';
        break;
    case "東京":
        echo '日本です<br>';
        break;
    default:
        echo '国はわかりません<br>';
}

// 3種類のPC(MacBook, iMac, IdeaPad)から、PCを一つ選んで買うかどうか判断する
// 第一希望:20万円以下の価格で、MacBookもしくはImacなら 'PC名を買います'と表示させる
// 第二希望:10万円以下の価格なら、 '(PC名)を買います'と表示させる
// 第三希望：第一、第二どれにも当てはまらない場合は、 '(PC名)を買いません'と表示させる
// 下記のように、PCの種類「$pc」価格は「$price 」という変数に編成に入れて条件分岐を作ることとする。

$pc ='IdeaPad';
$price = 90000;

if($pc !== 'IdeaPad' && $price <=200000) {
    echo $pc .'を買います';
    // MacbookもしくはiMacということはIdeaPadではないということなので　!==を使っている。
}elseif ($price <= 100000) {
    echo $pc.'を買います';
    // 10万以下なら何でもという意味なので＄pcに何が入ってるかで決まる
}else {
    echo $pc.'を買いません';
}

