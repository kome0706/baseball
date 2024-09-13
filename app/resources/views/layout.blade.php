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
                <a class="header-link" href="{{ url('/') }}">baseball funs</a>
                
                    @if(Auth::check())
                        <div class="header-link1">
                            <span class="header-user">{{ Auth::user()->name }}</span>
                            /
                            <a href="{{route('account.detail') }}" >アカウント詳細</a>
                            /
                            <a href="#" id="logout" class="logout" >ログアウト</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                @csrf
                            </form>
                            
                        </div>    
                        <script>
                            document.getElementById('logout').addEventListener('click', function(event){
                            event.preventDefault();
                            document.getElementById('logout-form').submit();    
                            });
                        </script>
                    @else    
                        <div class="header-link1">
                            <a  href="{{ route('login') }}">ログイン</a>
                            /
                            <a  href="{{ route('register') }}">会員登録</a>
                        </div> 
                    @endif
                          
            </div> 
        @yield('content')       
        </div>
    </body>  