<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>意見箱 |　匿名で意見が出来るサービス</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="意見箱は、匿名で意見や質問を出来るサービスです。URLをTwitterに投稿して、匿名の意見を集めることができます。" />
    <meta property="og:title" content="意見箱 -登録・ログイン-">
    <meta property="og:description" content="意見箱は、匿名で意見や質問を出来るサービスです。URLをTwitterに投稿して、匿名の意見を集めることができます。">
    <meta name="keywords" content="意見箱,意見,箱,匿名意見、匿名" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://localhost:8000">
    <meta property="og:image" content="/images/image.jpeg">
    <meta property="og:site_name" content="意見箱 -登録・ログイン-">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://localhost:8000/images/image.jpeg">

   <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
   <meta name="google-site-verification" content="sXjs6oaKk1ZdggfJ_UrEOkJEVsbnSqV9NJ1isiyJnYk" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127318366-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127318366-3');
</script>-->
<style>
@font-face{
  font-family:'HuiFontP109';
src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot');
src:url('https://dl.dropboxusercontent.com/s/6snqvg654tirsyv/HuiFontP109.eot?#iefix') format('embedded-opentype'),
url('https://dl.dropboxusercontent.com/s/7pscemjdvt0wyiq/HuiFontP109.woff') format('woff'),
url('https://dl.dropboxusercontent.com/s/0w9uuopxrns8ehi/HuiFontP109.ttf') format('truetype'),
url('https://dl.dropboxusercontent.com/s/xnnsbxtz8o6d98i/HuiFontP109.svg#HuiFontP109') format('svg');
}
.navbar-brand{
  font-family:'HuiFontP109';
  font-size:23px;
  padding:0;
  margin:0;
}
</style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background:#00aebb;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color:white;">
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
                            <a class="nav-link" href="/">{{ __('意見箱とは？') }}</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('登録') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/home" style="position:relative;">
                                ホーム
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('notification')}}" style="position:relative;">
                                通知
                            </a>
                            @if(!empty($notification))
                            <p style="top:4px; left:31px; position:absolute; font-size:10px;border-radius:50px; color:white; background:red; width:15px; text-align:center;">{{$notification->count()}}</p>
                            @endif

                        </li>
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
