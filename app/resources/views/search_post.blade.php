@extends('layout')
@section('content')
    <h>投稿検索</h>
    <div class="search_bar">
        <form action="{{route('search.post')}}" method="get">
            <input type="text" name="keyword" value="{{request('keyword')}}" style="font-size: 1em;">
            <input type="submit" value="検索" style="margin-left: 20px;">
        </form>
    </div>
    <h>検索結果</h>
    <div class="post-box">
        <table class="tables">
            @foreach($posts as $post)
                <tr>
                    <th class="scop">球場飯</th>
                    <td class="scops">{{$post['title']}}</td>
                </tr>
                <tr>
                    <th class="scop">日付</th>
                    <td class="scops">{{$post['date']}}</td>
                </tr>
                <tr>
                    <th class="scop">球場名</th>
                    <td class="scops">{{$post['stadium']}}</td>
                </tr>
                <tr>
                    <th class="scop">感想</th>
                    <td class="scops">{{$post['thoughts']}}</td>
                </tr>
                <tr>
                    <th class="scop">画像</th>
                    <td class="scops"><img src="{{ asset('storage/images/' . $post['image']) }}" style="width: 200px;"></td>
                </tr>
            @endforeach
        </table>
    </div>   
@endsection