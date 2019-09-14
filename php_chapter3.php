<?php
//問題1
$name = "Hasebe";
//$name = "Hasegawa";

if($name == "Hasebe"){
  echo "私は $name です";
}
else{
  echo "あなたの名前ではありません";
}

echo "\n";

//問題2
$sum = 0;
for($i = 1; $i <= 10000; $i++){
  $sum += $i;
}

echo $sum;
echo "\n";

//問題3
$fruits = ["いちご", "ぶどう", "バナナ", "ドリアン", "マンゴー"];

foreach ($fruits as $fruit) {
  echo "$fruit\n";
}

//問題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo "$i\n";
  }
}

?>
