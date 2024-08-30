@extends('layout')   

@section('content')
<div class="card-header" style="text-align: center; margin-top: 3em; font-size: 1.5em;">パスワード再登録</div>
    <div class="card-box" >
        <form action="" method="POST" class="form">
            @csrf
            <div class="form-group">
                <label for="password">新しいパスワード</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password-confirm">新しいパスワード（確認）</label>
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
            </div>
            <div class="text-right">
                <button type="submit" class="btn-form">登録</button>
            </div>
        </form>
    </div>
@endsection