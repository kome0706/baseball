@extends('layouts.app')

@section('content')
    <p>管理者専用ページ</p>
    @foreach($post as $posts) 
        <table>
            <tr>
                <th>タイトル</th>
                <th>投稿日時</th>
                <th>投稿詳細</th>
            </tr> 
            <tr>
                <td>{{$posts['title']}}</td>
                <td>{{$posts['date']}}</td>
                <td>
                    <a href="{{route('post.detail',['id'=>$posts['id']])}}">投稿詳細</a>
                </td>
            </tr>
        </table> 
    @endforeach      
@endsection
