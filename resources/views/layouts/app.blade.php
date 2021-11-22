<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- reset.css -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">

    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

    
    

<!-- Styles -->
<link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
<link href="{{ asset('css/slick.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</head>
<body>

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

    
    
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    
    <script src="{{ mix('js/swiper.js') }}"></script>
    <script src="js/slick.min.js"></script>
</body>

</html>
