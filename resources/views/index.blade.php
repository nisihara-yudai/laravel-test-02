@extends('layouts.default')
@section('title', 'トップページ')
@section('content')
<form action="{{ url('/thanks') }}" method="post" action="/back">
  @csrf
  <p>氏名</p>
  <p><input type="text" name="name"></p>
  <p>メールアドレス</p>
  <p><input type="text" name="email"></p>
  <input type="submit" name="submit" placeholder="送信">
  @foreach ($test02 as $test02)
  <p>
    {{$test02->name}}
  </p>
  <p>
    {{$test02->email}}
  </p>
  @endforeach
</form>
@endsection