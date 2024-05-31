<?php
// 変数とは
$name = "ゆうじ";
$age = 43;
echo $name . "<br>";
echo $age . "<br>";

//　データ型
echo $name. "[データ型]". gettype($name). "<br>";
echo $age. "[データ型]". gettype($age). "<br>";
echo false. "[データ型]". gettype(false). "<br>";

// 代入演算子
$num = 5 * 3;
echo $num . "<br>";
// $num = $num + 9;
$num += 9;
echo $num . "<br>";
$num ++;
echo $num . "<br>";
?>

<!-- HTMLタグ中に表示 -->
<h1><?php echo $name;?></h1>
<h1><?= $name?></h1>