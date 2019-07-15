const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.script([

    "public/static/js/jquery.js",
    "public/static/js/appear.js",
    "public/static/js/bootstrap.bundle.min.js",
    "public/static/js/bootstrap-select.min.js",
    "public/static/js/isotope.js",
    "public/static/js/jquery.bootstrap-touchspin.js",
    "public/static/js/jquery.countto.js",
    "public/static/js/jquery.easing.min.js",
    "public/static/js/jquery.enllax.min.js",
    "public/static/js/jquery.fancybox.js",
    "public/static/js/jquery.mixitup.min.js",
    "public/static/js/jquery.paroller.min.js",
    "public/static/js/owl.js",
    "public/static/js/validation.js",
    "public/static/js/wow.js",

], 'public/js/base.js');
