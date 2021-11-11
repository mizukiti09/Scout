<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- reset.css -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

</head>
<body>
    <div id="app">

    <!--背景用の動画ファイル-->
    @if(Request::is('/'))
    <div class="video-wrap">
        <video id="bg-video" autoplay loop muted poster="{{ asset('/img/video_kari.jpg') }}">
            <source src="{{ asset('/video/Record.mp4') }}" />
        </video>
    </div>
    
    <style>
        .header {
            display:none;
        }
    </style>
    @endif

    <!-- フラッシュメッセージ -->
    @if (session('flash_msg_cast_register'))
        <div class="alert alert-primary text-center" role="alert">
            <p>{{ session('flash_msg_cast_register') }}</p> 
            <div>
                <p>案件作成しますか？</p>
                <a href="{{ route('create_case', ['cast_id' => session('cast_last_id') ]) }}">はい</a>
                <a href="">いいえ</a>
            </div>
        </div>
    @endif

    @if (session('flash_msg'))
        <div class="alert alert-primary text-center" role="alert">
            <p>{{ session('flash_msg') }}</p> 
        </div>
    @endif
    
        @include('parts.header')

        <main class="main-content">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <script src="{{ mix('js/swiper.js') }}"></script>
</body>

</html>
