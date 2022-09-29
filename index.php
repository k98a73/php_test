<?php

// インプット引数 なし
// アウトプット戻り値 なし
function test() {
  echo 'テスト';
}

test();

// インプット引数 あり
// アウトプット戻り値 なし

$comment = 'コメント2';
$comment3 = 'コメント3';

function getComment($string) {
  echo $string;
}

getComment($comment3);

echo '<br>';

// インプット引数 なし
// アウトプット戻り値 あり

function getNumberOfComment() {
  return 5;
}

$commentNumber = getNumberOfComment();

// echo getNumberOfComment();

echo $commentNumber;

echo '<br>';

// 引数2つ
// 戻り値あり

function sumPrice($int1, $int2) {
  $int3 = $int1 + $int2;
  return $int3;
}

$total = sumPrice(3, 5);
echo $total;
