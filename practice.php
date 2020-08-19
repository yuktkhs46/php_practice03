<?php

//課題１
$name = 'yuki';
if($name='yuki'){
    echo '私は'.$name.'です';
}
else{
    echo 'あなたの名前はではありません';
}
echo "\n";/*改行*/
//課題２
$total=0;
for($i=0;$i<=10000;$i++){
     $total += $i;
}
echo $total;
/* 
$totalに初期値０を代入
$totalに$iを10000以下まで足し続けさせる（10000要素足す）
for文外でechoする
*/

//課題３

$fruits = array('apple','banana','orange','grape','lemon');

foreach ($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//課題４
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i%5 == 0){
    echo $i;
    echo "\n";
  }
 
}
/*「i%5」のところ、「i % 5」のように演算子の前後に空白が空いてるとバグになる*/

?>