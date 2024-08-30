@extends('layout')

@section('content')
<div class="header-card" style="text-align: center; margin-top: 4em; font-size: 1.5em;">ログイン</div>
    <div class="card-box">
        <form action="" method="POST" class="form">
            @csrf
            <div class="form-group" >
                <label for="email">メールアドレス</label>
                <input type="text" class="form-control" id="email" name="email" value="" />
            </div>
            <div class="form-group" >
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" name="password" />
            </div>
            <div class="text-right">
                <button type="submit" class="btn-form" >送信
                </button>
            </div>
        </form>
        <div class="text-center">
          <a href="">パスワードの変更はこちらから</a>
        </div>
    </div>  
@endsection