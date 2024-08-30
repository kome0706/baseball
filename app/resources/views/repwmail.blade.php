@extends('layout')   

@section('content')
    <div class="card-header" style="text-align: center; margin-top: 3em; font-size: 1.5em;">パスワード再登録</div>
    <div class="card-box" >
        <form action="" method="POST" class="form">
            @csrf
            <div class="form-group" style="text-align: center;">
                <label for="email" style="display:block;">登録時のメールアドレス</label>
                <input type="text" class="form-control" id="email" name="email" value="" style="margin-top:20px"/>
            </div>
            <div class="text-right">
                <button type="submit" class="btn-form">登録</button>
            </div>
    </div>
@endsection