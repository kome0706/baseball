@extends('layout')
@section('content')

    <div class="card-header" style="text-align: center; margin-top: 2em; font-size: 1.5em;">ポスト投稿</div>
        <div class="card-box" style="margin-top:4em;">
            <form action="{{ route('new.posts') }}" method="POST" class="form" enctype='multipart/form-data'>
                @csrf
                <div class="form-group">
                    <label for="title" >球場飯</label>
                    <input type="text" class="form-control" id="title" name="title"  />
                </div>
                <div class="form-group">
                    <label for="stadium" >球場名</label>
                    <input type="text" class="form-control" id="stadium" name="stadium"  />
                </div>
                <div class="form-group">
                    <label for="date" >日付</label>
                    <input type="date" class="form-control" id="date" name="date"  />
                </div>
                <div class="form-group">
                    <label for="image">画像</label>
                    <input type="file" class="form-control" id="image" name="image" style="height: 30px; width: 50%; font-size: 15px;"/>
                </div>
                <label for='thoughts' class='mt-2'>感想</label>
                            <textarea class='form-control' name='thoughts' style="height: 100px;"></textarea>
                <div class="text-right">
                    <button type="submit" class="btn-form" style="margin-top: 1em;">ポスト投稿</button>
                </div>
            </form>   
        </div>
    </div>    
@endsection