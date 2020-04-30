<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>保健師の国家試験対策をするならこのサイト | 保健師国家試験過去問題・分野別問題</title>
    <meta name="description" content="保健師国家試験の対策ができるサイトです。web上で保健師国家試験過去問や分野別問題を解くことができ、保健師国家試験過去問や分野別問題から弱点問題や強化問題から苦手な問題を克服することができます。" />
    <meta name="google-site-verification" content="1kJ6qAEX3ayOjbuachcteLHHbXrJcVoH0SKvzSeouqs" />
    <meta property="og:title" content="保健師の国家試験対策をするならこのサイト | 保健師国家試験過去問・分野別問題">
    <meta property="og:description" content="保健師国家試験の対策ができるサイトです。web上で保健師国家試験過去問や分野別問題を解くことが出来き、保健師国家試験過去問や分野別問題から弱点問題や強化問題から苦手な問題を克服することができます。">
    <meta name="keywords" content="保健師国家試験,試験問題,問題集,過去問,問題,保健師国試web問題,国試,保健師,保健師国試,Ministry of Health, Labour and Welfare,mhlw,保健師国家試験過去問" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://phn.x0.com">
    <meta property="og:image" content="images/phonto.jpg">
    <meta property="og:site_name" content="保健師の国家試験対策をするならこのサイト | phn">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="http://phn.x0.com/images/phonto.jpg">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127318366-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-127318366-1');
    </script>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    </head>
<body>
  <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background:#009900;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}" style="color:white;">
                    {{ config('app.name', 'Laravel') }}
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
                            <a class="nav-link" href="/">{{ __('ホーム') }}</a>
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
