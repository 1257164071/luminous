<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>综合管理系统 - @yield('title', '子页面')</title>
    <link rel="stylesheet" href="{{ mix('css/child.css') }}">
</head>

<body>
<br>

@yield('content')


<script src="{{ mix('js/child.js') }}"></script>

@yield('script')
</body>

</html>
