@extends('layout')
@section('content')
<h>削除が完了しました！<h>
    <a href="#" id="logout" class="logout" >ログイン画面へ</a>
        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
            @csrf
        </form>
        <script>
            document.getElementById('logout').addEventListener('click', function(event){
            event.preventDefault();
            document.getElementById('logout-form').submit();    
            });
        </script>
@endsection