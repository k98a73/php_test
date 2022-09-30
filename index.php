<?php
// 文字列の長さ

// マルチバイト
// 日本語 SJIS(昔), UTF-8(主流) 3〜6バイト
$text = 'あいうえお';
// echo strlen($text);

echo mb_strlen($text);

echo '<br>';

// 文字列の置換

$str = '文字列を置換します';

echo str_replace('置換', 'ちかん', $str);

echo '<br>';

// 指定文字列で分割

$str_2 = '指定文字列で、分割します';
echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre>';

// implode：文字列を結合

echo '<br>';

// 正規表現
// 文字かどうか、数字かどうか、郵便番号やメールアドレスかどうか

$str_3 = '特定の文字列が含まれるかを確認する';

echo preg_match('/文字列/', $str_3);

echo '<br>';

// 指定文字列から文字列を取得する

echo substr('abcde', 2);
echo '<br>';

echo mb_substr('かきくけこ', 2);
