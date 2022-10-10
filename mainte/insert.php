<?php

// DB接続 PDO
require 'db_connection.php';

// 入力 DB保存 prepare, execute(配列(全て文字列))
$params = [
  'id' => null, // IDはAuto Incrementなのでnullにしている
  'your_name' => 'なまえ123',
  'email' => 'test@test.com',
  'url' => 'http://test.com',
  'gender' => '1',
  'age' => '2',
  'contact' => 'いいい',
  'created_at' => null, // created_atはON UPDATE CURRENT_TIMESTAMPなのでnullにしている
];

$count = 0;
$columns = '';
$values = '';

foreach (array_keys($params) as $key) {
  if ($count++ > 0) {
    $columns .= ',';
    $values .= ',';
  }
  $columns .= $key;
  $values .= ':' . $key;
}

$sql = 'insert into contacts (' . $columns . ')values(' . $values . ')';

// var_dump($sql);
// exit();

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
