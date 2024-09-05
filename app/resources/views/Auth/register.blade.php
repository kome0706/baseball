@extends('layout')   

@section('content')
<div class="card-header" style="text-align: center; margin-top: 3em; font-size: 1.5em;">会員登録</div>
    <div class="card-box" >
        <form action="{{ route('register') }}" method="POST" class="form">
            @csrf
            <div class="form-group">
                <label for="name">ユーザー名</label>
                <input type="text" class="form-control" id="name" name="name" value="" />
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" class="form-control" id="email" name="email" value="" />
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password-confirm">パスワード（確認）</label>
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
            </div>
            <div class="text-right">
                <button type="submit" class="btn-form">登録</button>
            </div>
        </form>
    </div> 
@endsection       
