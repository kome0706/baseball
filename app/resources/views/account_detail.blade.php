@extends('layout')
@section('content')
    <div class="card-header" style="text-align: center; margin-top: 3em; font-size: 1.5em;">アカウント編集</div>
    <div style="display: flex; justify-content: center;">
        <a href="{{route('account.del.conf',Auth::user()->id)}}">
            <button class="btn">アカウント削除確認</button>
        </a>
        <a href="{{route('account.edit',Auth::user()->id)}}">
            <button class="btn">アカウント編集</button>
        </a>
    </div>
@endsection