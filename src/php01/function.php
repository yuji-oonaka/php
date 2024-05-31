<?php
// 関数とは？
// 俺の自己紹介テンプレ
introduce();
// echo 'ゆうじ 43歳です!はじめまして!<br>職業はプログラマーで未婚です';
echo 'あなたの名前と職業はなんですか？<br>';
// 別の新しい人と出会った
// echo 'ゆうじ 43歳です!はじめまして!<br>職業はプログラマーで未婚です';
// 俺の自己紹介テンプレ
introduce();
//　関数
function introduce () {
    echo 'ゆうじ 43歳です!はじめまして!<br>職業はプログラマーで未婚です<br>';
}

// 関数の定義方法
// function 関数名　(引数1,　引数2,　引数3,...) {
// 実行内容 
// }
// 関数の呼び出し方
// 関数名(); ←　引数なし;
// 関数名(引数1,　引数2,　引数3,...); ←引数あり

// 引数とは？

// 結婚相談所！
// 男性の各スペック
$deviationScore = 55; //大学の偏差値
$height = 180; //身長
$income =400; //年収
// 女性の求める基準
$femaleLikeDeviationScore = 60; //希望偏差値
$femaleLikeHeight = 175; //希望身長
$femaleLikeIncome = 1000; //希望年収

echo '偏差値:';
if ($deviationScore >= $femaleLikeDeviationScore) {
    echo $deviationScore. 'で、合格！<br>';
}else {
    echo $deviationScore. 'で、不合格！<br>';
}
echo '偏差値:';
if ($height >= $femaleLikeHeight) {
    echo $height. 'で、合格！<br>';
}else {
    echo $height. 'で、不合格！<br>';
}
echo '偏差値:';
if ($income >= $femaleLikeIncome) {
    echo $income. 'で、合格！<br>';
}else {
    echo $income. 'で、不合格！<br>';
}

// 関数　引数を使う！
function specChecker ($specName, $spec, $femaleLike) {
    echo $specName. ':';
    if ($spec >= $femaleLike) {
        echo $spec. 'で、合格！<br>';
    }else {
        echo $spec. 'で不合格！<br>';
    }
}
specChecker('偏差値', $deviationScore, $femaleLikeDeviationScore);
specChecker('身長', $height, $femaleLikeHeight);
specChecker('年収', $income, $femaleLikeIncome);

// 返り値
function getIncomeAverage ($income1, $income2, $income3) {
    $average = ($income1 + $income2 + $income3) / 3;
    return $average;
    //  returnより下は処理されません
}
$IncomeAverage = getIncomeAverage(300, 500, 1000);
echo $IncomeAverage;
// 例えばこの年収平均を使って求める年収を設定し直すことも可能
$femaleLikeIncome = getIncomeAverage(300, 500, 1000);//希望年収
specChecker('年収', $income, $femaleLikeIncome);