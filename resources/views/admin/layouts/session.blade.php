<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>综合管理系统 - @yield('title', '登录')</title>


    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->


    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/all.css') }}">
</head>

<body>

@yield('content')

<script src="{{ mix('js/all.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
