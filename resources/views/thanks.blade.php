@extends('layouts.default')
@section('title','お問い合わせ完了ページ')
@section('content')
<table>
    <tr>
        <td>{{ $thanks }}</td>
    </tr>
    <tr>
        <td><button type="button" onclick="history.back()">トップへ戻る</button></td>
    </tr>
</table>
@endsection