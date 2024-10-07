@extends('layout')   

@section('content')
    <div class="card-header" style="text-align: center; margin-top: 3em; font-size: 1.5em;">パスワード再登録</div>
    <p class="card-header"style="text-align: center; margin-top: 3em; ">パスワード再設定のためのURLをお送りします</p>
    <div class="card-box" >
        <form action="{{ route('reset.send') }}" method="POST" class="form">
            @csrf
            <div class="form-group" style="text-align: center;">
                <label for="mail" style="display:block;">登録時のメールアドレス</label>
                <input type="text" class="form-control" id="mail" name="mail" value="{{ old('mail') }}" style="margin-top:20px"/>
                <br>
                <span style="color:red">{{ $errors->first('mail') }}</span>
            </div>
            <div class="text-right">
                <button type="submit" class="btn-form">再設定用メールの送信</button>
            </div>
    </div>
@endsection