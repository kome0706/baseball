@extends('layout')
@section('content')
    <div class="card-header" style="text-align: center; margin-top: 2em; font-size: 1.5em;">画像変更</div>
        <div class="card-box" style="margin-top:4em;">
            <form action="{{route('edit.image', ['id'=>$result['id']] )}}" method="POST" class="form" enctype='multipart/form-data'>
                @csrf
                <div class="form-group">
                    <label for="image">画像</label>
                    <input type="file" class="form-control" id="image" name="image" style="height: 30px; width: 50%; font-size: 15px;"/>
                </div>
                <div class="text-right">
                            <button type="submit" class="btn-form" style="margin-top: 1em;">画像変更</button>
                        </div>
            </form>
        </div>
    </div>
@endsection