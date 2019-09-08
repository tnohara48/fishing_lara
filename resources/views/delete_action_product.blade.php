<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/fishing_lara/resources/views/classes/util/SessionUtil.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/fishing_lara/resources/views/classes/util/CommonUtil.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/fishing_lara/resources/views/classes/model/ProductsModel.php');

// セッションスタート
//SessionUtil::sessionStart();

// サニタイズ
//$post = CommonUtil::sanitaize($_POST);

try {
    $db_product = new ProductsModel();

    // トランザクション開始
    $db_product->begin();

    $db_product->deleteProductById($id); 

    // トースト表示の設定
   $_SESSION['toast'] = "商品を削除しました";

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
