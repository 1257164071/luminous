<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>@yield('title', 'content_page')</title>


    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="stylesheet" href="{{ mix('css/content.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
<br>
@yield('content')

<script src="{{ mix('js/content.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>


@include('admin.shared._errors')
@include('admin.shared._message')


@yield('script')
</body>

</html>
