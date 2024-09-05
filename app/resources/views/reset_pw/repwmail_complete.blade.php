@extends('layout')
@section('content')
    <main style="    text-align: center; margin-top: 5em;">
        <div>メール送信完了</div>
        <div>
            <p>パスワード再設定用のメールを送信しました</p>
            <p>メールに記載されているリンクからパスワードの再設定を行ってください</p>
        </div>
        <div>
        <a href="{{ route('login') }}">ログイン画面へ</a>
        </div>
    </main>
@endsection