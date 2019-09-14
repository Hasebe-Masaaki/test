<?php
//問題1
function double_number($number){
  return $number * 2;
}

echo double_number(3);
echo "\n";

//問題2
function sum_number($a, $b){
  return $a + $b;
}

echo sum_number(19, 57);
echo "\n";

//問題3
function multi_array($arr){
  $sol = 1;
  foreach ($arr as $num) {
    $sol *= $num;
  }

  return $sol;
}

$array = [1, 3, 5, 7, 9];
echo multi_array($array);
echo "\n";

//問題4
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    if($a > $max_number){
      $max_number = $a;
    }
  }

  return $max_number;
}

$array = [21, 13, 45, 27, 19];
echo max_array($array);
echo "\n";

//問題5
echo strip_tags("<body>Hello!</body>");
echo "\n";

array_push($array, 11, 13);
foreach ($array as $value) {
  echo "$value\n";
}

echo "\n";

$array2 = [15, 17, 19];
$array3 = array_merge($array, $array2);
foreach ($array3 as $value) {
  echo "$value\n";
}

echo time();
echo "\n";
echo mktime(9,30,15,9,14,2019);
echo "\n";

echo date("Y-m-d H:i:s");
echo "\n";

?>
