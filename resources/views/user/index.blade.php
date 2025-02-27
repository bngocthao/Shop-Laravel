<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('shopper/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('shopper/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('shopper/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('shopper/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('shopper/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('shopper/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('shopper/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('shopper/js/html5shiv.js')}}"></script>
    <script src="{{asset('shopper/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->
<body>

    @yield('content')

<script src="{{asset('shopper/js/jquery.js')}}"></script>
<script src="{{asset('shopper/js/bootstrap.min.js')}}"></script>
<script src="{{asset('shopper/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('shopper/js/price-range.js')}}"></script>
<script src="{{asset('shopper/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('shopper/js/main.js')}}"></script>
</body>
</html>
