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

mix.styles([
    'resources/plantilla/css/bootstrap.min.css',
    'resources/plantilla/css/style.css'
], 'public/css/plantilla.css')

.scripts([
    'resources/plantilla/js/jquery-3.4.1.slim.min.js',
    'resources/plantilla/js/popper.min.js',
    'resources/plantilla/js/bootstrap.min.js'
], 'public/js/plantilla.js')

.js(['resources/js/app.js'], 'public/js/app.js');