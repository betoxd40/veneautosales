let mix = require('laravel-mix');

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

mix.scripts([
    'resources/assets/js/jquery.js',
    'resources/assets/js/popper.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/front.js',
    'resources/assets/js/toastr.js',
    'resources/assets/js/vue.js',
    'resources/assets/js/axios.js',
    'resources/assets/js/app.js',
    'resources/assets/js/preview.js',
    'resources/assets/js/jquery-ui.js',
    'resources/assets/js/jquery-validate.min.js',
    'resources/assets/js/MetroNotification.min.js'

], 'public/js/app.js')
    .styles([
        'resources/assets/css/bootstrap.min.css',
        'resources/assets/css/font-awesome.css',
        'resources/assets/css/font.css',
        'resources/assets/css/toastr.css',
        'resources/assets/css/custom.css',
        'resources/assets/css/fonts.css',
        'resources/assets/css/style.default.css',
        'resources/assets/css/MetroNotificationStyle.min.css'
    ], 'public/css/app.css')
    .browserSync('autosales.dev');


