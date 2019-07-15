<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'luminous') || index.page</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- master stylesheet -->
    <link rel="stylesheet" href="static/css/style_1.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="static/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="static/js/html5.js"></script>
        <script src="static/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
<div class="boxed_wrapper">

    <div class="preloader"></div>
    @include('index.layouts._header')

    @yield('content')

    @include('index.layouts._footer')
</div>


<div class="scroll-to-top-style2 scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</div>



<script src="static/js/jquery.js"></script>
<script src="static/js/appear.js"></script>
<script src="static/js/bootstrap.bundle.min.js"></script>
<script src="static/js/bootstrap-select.min.js"></script>
<script src="static/js/isotope.js"></script>
<script src="static/js/jquery.bootstrap-touchspin.js"></script>
<script src="static/js/jquery.countto.js"></script>
<script src="static/js/jquery.easing.min.js"></script>
<script src="static/js/jquery.enllax.min.js"></script>
<script src="static/js/jquery.fancybox.js"></script>
<script src="static/js/jquery.mixitup.min.js"></script>
<script src="static/js/jquery.paroller.min.js"></script>
<script src="static/js/owl.js"></script>
<script src="static/js/validation.js"></script>
<script src="static/js/wow.js"></script>

<!---
<script src="static/js/gmaps.js"></script>
<script src="static/js/f338ef4cb6da40f8a4af74f0ca2d9b1c.js"></script>
<script src="static/js/mapapi.js"></script>
--->
<script src="static/js/map-helper.js"></script>

<script src="static/js/jquery.polyglot.language.switcher.js"></script>
<script src="static/js/timepicker.js"></script>
<script src="static/js/html5lightbox.js"></script>

<!--Revolution Slider-->
<script src="static/js/jquery.themepunch.revolution.min.js"></script>
<script src="static/js/jquery.themepunch.tools.min.js"></script>
<script src="static/js/revolution.extension.actions.min.js"></script>
<script src="static/js/revolution.extension.carousel.min.js"></script>
<script src="static/js/revolution.extension.kenburn.min.js"></script>
<script src="static/js/revolution.extension.layeranimation.min.js"></script>
<script src="static/js/revolution.extension.migration.min.js"></script>
<script src="static/js/revolution.extension.navigation.min.js"></script>
<script src="static/js/revolution.extension.parallax.min.js"></script>
<script src="static/js/revolution.extension.slideanims.min.js"></script>
<script src="static/js/revolution.extension.video.min.js"></script>
<script src="static/js/main-slider-script.js"></script>

<!-- thm custom script -->
<script src="static/js/custom.js"></script>



</body>
</html>
