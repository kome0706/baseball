<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'baseball funs') }} </title>

        <!-- Styles -->
        <link href="{{ asset('css/appd.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        @yield('stylesheet')
    </head>
    <body>
        <div id="app">
            <div class="header">
                <a class="header-link" href="">baseball funs</a>
                <div class="header-link1">
                    <a  href="">ログイン</a>
                    /
                    <a  href="">会員登録</a>
                </div>    
            </div> 
        @yield('content')       
        </div>
    </body>  