@extends('layout')
@section('content')
    <div class="card-header" style="text-align: center; margin-top: 3em; font-size: 1.5em;">アカウント削除確認</div>
    <p style="text-align: center;">本当に削除しますか？</p>
    <div class="conf-del">
        <a href="/">
            <button class="btn">いいえ(トップへ戻る)</button>
        </a>
        <a href="{{route('account.del',Auth::user()->id)}}">
            <button class="btn">はい(削除)</button>
        </a>
    </div>
@endsection