<?php

$height = 91;

if ($height !== 90) {
  echo '身長は90cmではありません。';
}

// データが入っているか
// isset empty is_null

$test = '1';

if (empty($test)) {
  echo '変数は空です。';
} else {
  echo '変数は空ではありません。';
}

// AND と OR

$signal_1 = 'red';
$signal_2 = 'yellow';

if ($signal_1 === 'red' || $signal_2 === 'blue') {
  echo '赤です。';
}

// 三項演算子

$math = 80;

$comment = $math > 80 ? 'good' : 'not good';

echo $comment;
