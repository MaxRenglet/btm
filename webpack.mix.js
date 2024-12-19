const mix = require('laravel-mix');
require('mix-tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */
mix.setPublicPath('dist');

// Theme
mix.js('assets/js/app.js', 'dist/theme.min.js');
mix.sass('assets/sass/app.scss', 'dist/theme.min.css')
   .tailwind();