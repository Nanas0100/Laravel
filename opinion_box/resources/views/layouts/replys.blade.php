<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$reply->reply}} #意見箱 </title>
    <meta name="description" content="意見箱の投稿への返信です。{{$reply->reply}}-{{$reply->reply}}" />
    <meta property="og:title" content="返信:{{$reply->reply}} | 意見箱">
    <meta property="og:description" content="返信:{{$reply->reply}} | 意見箱">
    <meta name="keywords" content="意見箱,意見,箱" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ikenbako.sakura.ne.jp">
    <meta property="og:image" content="/images/{{$reply->image}}">
    <meta property="og:site_name" content="{{$reply->reply}}-{{$reply->title}} | 意見箱">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="https://ikenbako.sakura.ne.jp/images/{{$reply->image}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background:skyblue;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-family:arial black; color:white;">
                  <i class="fas fa-box-open" style="padding-right:10px;"></i>意見箱
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('登録') }}</a>
                                </li>
                            @endif
                        @else
                          @if(Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('notification')}}" style="position:relative;">
                                通知
                            </a>
                            @if($notification->count()!=0)
                            <p style="top:4px; left:31px; position:absolute; font-size:10px;border-radius:50px; color:white; background:red; width:15px; text-align:center;">{{$notification->count()}}</p>
                            @endif

                        </li>
                        @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
