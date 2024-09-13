@extends('layout')
@section('content')
    <div class="card-header" style="text-align: center; margin-top: 3em; font-size: 1.5em;">アカウント詳細</div>
    <a href="">
        <button class="btn">アカウント削除確認</button>
    </a>
    <a href="{{route('account.edit')}}">
        <button class="btn">アカウント編集</button>
    </a>
    <div class="post-box">
                <table class="tables">
                    @foreach($post as $posts)
                        <tr>
                            <th class="scop">球場飯</th>
                            <td class="scops">{{$posts['title']}}</td>
                        </tr>
                        <tr>
                            <th class="scop">日付</th>
                            <td class="scops">{{$posts['date']}}</td>
                        </tr>
                        <tr>
                            <th class="scop">球場名</th>
                            <td class="scops">{{$posts['stadium']}}</td>
                        </tr>
                        <tr>
                            <th class="scop">感想</th>
                            <td class="scops">{{$posts['thoughts']}}</td>
                        </tr>
                        <tr>
                            <th class="scop">画像</th>
                            <td class="scops"><img src="{{ asset('storage/images/' . $posts['image']) }}" style="width: 200px;"></td>
                        </tr>
                    @endforeach    
                </table>
            </div>
@endsection