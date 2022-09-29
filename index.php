<?php

// switch
// if分の方がいい 見やすい

$data = 1;
switch ($data) {
  case $data === 1:
    echo '1です';
    break;
  case 2:
    echo '2です';
    break;
  case 3:
    echo '3です';
    break;
  default:
    echo '1〜3ではありません';
}

echo '<br>';

if ($data === 1) {
  echo '1';
}
if ($data === 2) {
  echo '2';
}
if ($data === 3) {
  echo '3';
}
