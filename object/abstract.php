<?php

// 抽象クラス
abstract class ProductAbstract {
  // 変数 関数
  public function echoProduct() {
    echo '親クラスです';
  }

  abstract public function getProduct();
}

// 具象クラス、親クラス
class BaseProduct {
  // 変数 関数
  public function echoProduct() {
    echo '親クラスです';
  }

  // オーバーライド
  public function getProduct() {
    echo '親の関数です';
  }
}

// 子クラス
class Product extends ProductAbstract {
  // アクセス修飾子, private（外からアクセスできない）, protected（自分・継承したクラス）, public（公開）

  // 変数
  private $product = [];

  // 関数
  // 初回
  function __construct($product) {
    $this->product = $product;
  }

  public function getProduct() {
    echo $this->product;
  }

  public function addProduct($item) {
    $this->product .= $item;
  }

  public static function getStaticProduct($str) {
    echo $str;
  }
}

$instance = new Product('テスト');

var_dump($instance);

$instance->getProduct();
echo '<br>';

// 親クラスのメソッド
$instance->echoProduct();
echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

// 静的(static) クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';
