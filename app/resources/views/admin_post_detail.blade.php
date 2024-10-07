@extends('layouts.app')
@section('content')
    <div class="post-box" style="margin: 0 auto; margin-top: 5em;">
        <table class="tables">
                <tr>
                    <th class="scop">球場飯</th>
                    <td class="scops">{{$posted->title}}</td>
                </tr>
                <tr>
                    <th class="scop">日付</th>
                    <td class="scops">{{$posted->date}}</td>
                </tr>
                <tr>
                    <th class="scop">球場名</th>
                    <td class="scops">{{$posted->stadium}}</td>
                </tr>
                <tr>
                    <th class="scop">感想</th>
                    <td class="scops">{{$posted->thoughts}}</td>
                </tr>
                <tr>
                    <th class="scop">画像</th>
                    <td class="scops"><img src="{{ asset('storage/images/' . $posted->image) }}" style="width: 200px;"></td>
                </tr>
        </table>
        <div>
            <a href="{{route('del.post', ['id'=>$posted ['id']]) }}">
                <button class="btn_detail">投稿削除</button>
            </a>
        </div>
    </div>
@endsection