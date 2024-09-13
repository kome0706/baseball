@extends('layout')

@section('content')

    <main class="top-main">
        <div class="top-head">
            <div class="back">
                <button class="btn" onclick="location.href='{{ url('/') }}'">タイムライン</button> 
                <a href="{{ route('search.post') }}">              
                    <button class="btn">投稿検索</button>
                </a>            
                <a href="{{route('new.posts') }}">
                    <button class="btn">新規投稿</button>
                </a>
            </div>
        </div>
        <div class="posts">
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
                        <tr>
                            <td>
                                <a href="{{route('post.detail', ['id'=>$posts['id']])}}"> 
                                    <button class="btn-detail">投稿詳細</button>
                                </a>
                            <td>
                        </tr>
                    @endforeach    
                </table>
            </div>
        </div>    
    </main>
@endsection

