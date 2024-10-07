
@extends('layout')
@section('content')
    <div class="text-center" style="font-size: 1.5em;">投稿画面</div>
    <div class="top-head">
        <a href="/">
            <button class="btn">更新</button>
        </a>
        <a href="{{route('search.post')}}">
            <button class="btn">投稿検索</button>
        </a>
        <a href="{{route('new.posts')}}">
            <button class="btn">新規投稿</button>
        </a>
    </div>   
    <div class="post-box" style="margin: 0 auto; margin-top: 3em;">
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
                <tr>
                    <td>
                        <button id="good" class="good" onclick="like({{$posts['id']}})">いいね</button>
                            <script
                                src="https://code.jquery.com/jquery-3.3.1.min.js"
                                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                                crossorigin="anonymous">
                            </script>
                            <button id="ungood" class="ungood hidden" onclick="unlike({{$posts['id']}})">いいね解除</button>
                            <script
                                src="https://code.jquery.com/jquery-3.3.1.min.js"
                                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                                crossorigin="anonymous">
                            </script>
                    </td>
                        @endforeach
                </tr>
        </table>
            
        </div>
@endsection
