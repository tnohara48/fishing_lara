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
    print("pro" . $_COOKIE['productId']);
//    exit();
    // 商品削除
    /// $db_product->deleteProductById($post['deleteProductId']);
    $db_product->deleteProductById($_COOKIE['productId']); 

    // トースト表示の設定
   // $_SESSION['toast'] = "商品を削除しました";

    // コミット
    $db_product->commit();

    // echo url('');

    // redirect()->route('home.index');
    // return redirect('/');

    // ///header('Location: ./');
    // echo url('');
    // {{ action('home@index'); }}
    // print ("{{ route('top') }}");
    // print ('{{ Request::root() }}');
    // //print ("{{ url('home@index') }}");
    // //header( 'Location: ./' . "{{ action('home@index') }}" );
    // header( 'Location: ' . url('') . '/index.html');
    // view('home.index');
    //view('home');
    // return view('home.index');
    // return redirect('/');
    // return;
} catch (Exception $e) {

    // ロールバック
    $db_product->rollback();
    //header('Location: ../error/error.php');
}
require_once($_SERVER['DOCUMENT_ROOT'] . '/fishing_lara/resources/views/home.blade.php');
