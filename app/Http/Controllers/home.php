<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class home extends Controller
{
    function index()
    {
     return view('home');
    }

    function show()
    {
     return view('delete_product');
    }

    public function view() { 
      // a. ビュー 変数 を 準備 
      $data = [ 'msg' => 'こんにちは、 世界！' ];
      // b. テンプレート を 呼び出す 
      return view('view', $data); 
    }


    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('products')
         ->where('search_product_name', 'like', '%'.$query.'%')
         ->get();
      }
      else
      {
       $data = DB::table('products')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->product_name.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

    /*
    商品名編集
    */
    function edit_product(Request $req)
    {
      $id = $req->editProductId;
      return view('edit_product', [
        'id' => $id,
        ]); 
    }

    /*
    商品名編集実行
    */
    public function edit_action_product(Request $req)
    {
      $id = $req->editProductId;
      $product_name = $req->product_name;
      $product_memo = $req->product_memo;
      return view('home', [
         'proc' => 'MOD',
         'id' => $id,
         'product_name' => $product_name,
         'product_memo' => $product_memo,
      ]); 
    }

    
    /***************************/
    /*
    状態登録
    */
    function entry_condition()
    {
     return view('entry_condition');

    }

    /***************************/
    /*
    状態編集
    */
    function edit_condition(Request $req)
    {
      $id = $req->editConditionId;
      return view('edit_condition', [
        'id' => $id,
        ]); 
    }
    /*
    状態編集実行
    */
    public function edit_action_condition(Request $req)
    {
      // print_r("typeId=[" . $req . "]");
      // var_dump($req);
      // exit();

      $id = $req->conditionId;
      $conditionTypeId = $req->conditionTypeId;
      $condition_memo = $req->condition_memo;
      $maxConditionId = $req->maxConditionId;
      
      return view('home', [
         'proc' => 'MOD_COND',
         'id' => $id,
         'conditionTypeId' => $conditionTypeId,
         'condition_memo' => $condition_memo,
         'maxConditionId' => $maxConditionId,
         ]); 
    }

    /***************************/
    /*
    商品情報削除
    */
    function delete_product(Request $req)
    {
      $id = $req->deleteProductId;
      return view('delete_product', [
        'id' => $id,
        ]); 
    }
    /*
    商品情報削除実行
    */
    function delete_action_product(Request $req)
    {
      $id = $req->deleteProductId;
      return view('home', [
         'proc' => 'DEL',
         'id' => $id,
      ]);
    }


    /***************************/
    /*
    状態削除
    */
    function delete_condition(Request $req)
    {
      $id = $req->deleteConditionId;
      return view('delete_condition', [
        'id' => $id,
        ]); 
    }

    /*
    状態削除実行
    */
    function delete_action_condition(Request $req)
    {
      $id = $req->deleteConditionId;
      return view('home', [
         'proc' => 'DEL_COND',
         'id' => $id,
      ]);
    }


    /***************************/
    public function form() 
    { 
      return view('form', [ 'result' => '' ]); 
    }

    // public function form(Request $req) { // a. リクエスト 情報 を 取得 
    //   $name = $req->input('name', '名無権兵衛');
      
    //   $name = $req->name; 
    //   return view('home.form', [
    //      'result' => 'こんにちは、'.$name.'さん！' 
    //      ]); 
    // }
    public function result(Request $req) { // a. リクエスト 情報 を 取得 
      $name = $req->input('name', '名無権兵衛');
      
      //$name = $req->name;
      return view('form', [
         'result' => 'こんにちは、'.$name.'さん！' 
         ]); 
    }

    /*
    状態登録
    */
    function error()
    {
     return view('error.error');

    }

}
