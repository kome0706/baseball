@extends('layout')
@section('content')
    <div class="card-header" style="text-align: center; margin-top: 3em; font-size: 1.5em;">アカウント編集</div>

        <form action="{{route('account.edit')}}" method="POST" class="form">
            @csrf
            <div class="form-group" style="margin-top:5em; margin-bottom:5em;">
                <label for="name">ユーザー名</label>
                <input type="text" class="form-control" id="name" name="name" value="" />
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" class="form-control" id="email" name="email" value="" />
            </div>
            <div class="text-right" style="display:flex; justify-content: center;"> 
                <button class="btn" style="margin:0;">変更</button>   
            </div>
        </form>
@endsection