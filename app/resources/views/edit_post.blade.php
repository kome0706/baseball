@extends('layout')
@section('content')
    <div class="card-header" style="text-align: center; margin-top: 2em; font-size: 1.5em;">ポスト編集</div>
        <div class="card-box" style="margin-top:4em;">
            <form action="{{route('edit.post',['id'=>$result['id']]) }}" method="POST" class="form" enctype='multipart/form-data'>
                @csrf
                <div class="form-group">
                    <label for="title" >球場飯</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old(('title'), $result->title)}}" />
                </div>
                <div class="form-group">
                    <label for="stadium" >球場名</label>
                    <input type="text" class="form-control" id="stadium" name="stadium" value="{{ old(('stadium'), $result->stadium)}}" />
                </div>
                <div class="form-group">
                    <label for="date" >日付</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ old(('date'), $result->date)}}" />
                </div>
                <label for='thoughts' class='mt-2'>感想</label>
                            <textarea class='form-control' name='thoughts' style="height: 100px;">{{old(('thoughts'), $result->thoughts)}}</textarea>
                <div class="text-right">
                    <button type="submit" class="btn-form" style="margin-top: 1em;">ポスト編集</button>
                </div>
            </form>   
        </div>
    </div>
@endsection