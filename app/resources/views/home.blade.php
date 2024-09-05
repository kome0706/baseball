@extends('layout')

@section('content')

    <main class="top-main">
        <div class="top-head">
            <div class="back">
                <button class="btn" onclick="location.href='{{ url('/') }}'">タイムライン</button>
                <button class="btn">投稿検索</button>
                <button class="btn">新規投稿</button>
            </div>
        </div>
        <div class="post-box">
            <table>
                <tr>
                    <th class="scop">タイトル</th>
                    <td class="scops">タイトル</td>
                </tr>
                <tr>
                    <th class="scop">日付</th>
                </tr>
                <tr>
                    <th class="scop">球場名</th>
                </tr>
                <tr>
                    <th class="scop">感想</th>
                </tr>
                <tr>
                    <th class="scop">画像</th>
                </tr>
            </table>
        </div>
    </main>
@endsection

