<?php

require 'db_connection.php';

// ユーザー入力なし query
// sql
// $sql = 'select * from contacts where id = 2';
// sql実行 stmt：ステートメントの略
// $stmt = $pdo->query($sql);

// $result = $stmt->fetchAll();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

//ユーザー入力あり prepare, bind, execute 悪意ユーザー delete * SQLインジェクション対策
$sql = 'select * from contacts where id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', 3, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';

// トランザクション まとまって処理 beginTransaction, commit, rollback

$pdo->beginTransaction();

try {
  // sql処理
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', 3, PDO::PARAM_INT);
  $stmt->execute();

  $pdo->commit();
} catch (PDOException $e) {
  $pdo->rollBack(); // 更新のキャンセル
}
