<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/fishing_lara/resources/views/classes/util/SessionUtil.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/fishing_lara/resources/views/classes/util/CommonUtil.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/fishing_lara/resources/views/classes/model/ProductsModel.php');

// セッションスタート
//SessionUtil::sessionStart();

// サニタイズ
//$post = CommonUtil::sanitaize($_POST);

// データベースに登録する内容を連想配列にする。
//'id' => $post['editProductId'],
// $data = array(
//     'id' => $_COOKIE['productId'],
//     'product_name' => $post['product_name'],
//     'product_memo' => $post['product_memo'],
// );
$data = array(
    'id' => $id,
    'product_name' => $product_name,
    'product_memo' => $product_memo,
);

try {
    $db_product = new ProductsModel();

    // トランザクション開始
    $db_product->begin();

    // 商品情報更新
    $db_product->updateProductById($data);

    // トースト表示の設定
    $_SESSION['toast'] = "商品を更新しました";

    // コミット
    $db_product->commit();

?>
    <script>
        location.href="{{ action('home@index') }}";
    </script>
<?php

} catch (Exception $e) {

    // ロールバック
    $db_product->rollback();

?>
    <script>
        location.href="{{ action('home@error') }}";
    </script>
<?php
}

?>
    
