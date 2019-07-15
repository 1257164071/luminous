<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>综合管理系统 - 主页</title>


    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

{{--    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">--}}
{{--    <link href="css/font-awesome.min.css?v=4.4.0" rel="stylesheet">--}}
{{--    <link href="css/animate.css" rel="stylesheet">--}}
{{--    <link href="css/style.css?v=4.1.0" rel="stylesheet">--}}

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/all.css') }}">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        @include('admin.index._navebar_left')
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        @include('admin.index._navebar_top')
        <!--右侧边栏结束-->
    </div>

    <script src="{{ mix('js/all.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>

@include('shared._errors')
@include('shared._message')

</body>

</html>
