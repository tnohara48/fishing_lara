@extends('layouts.base')
@section('title', 'フォーム の 基本')
@section('main')
<form method="POST" action="result">
<!-- a. CSRF 対策（ おまじない） -->
@csrf 
<label id="name">名前：</label>
<input id="name" name="name" type="text" value ="" />
<input type="submit" value="送信"/>
<p>{{ $result }}</p>
</form>
@endsection
