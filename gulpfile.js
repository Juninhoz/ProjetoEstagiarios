const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');


    mix.styles([
        'bootstrap.min.css',
        'jquery-ui.css',
        'datatables.min.css',
        'sweetalert2.css',
        'styles.css'], 'public/css/app.css', 'public/css');

    mix.scripts([
        'jquery-3.1.1.min.js',
        'bootstrap.js',
        'datatables.min.js',
        'sweetalert2.js',
        'jquery-ui.js'], 'public/js/app.js', 'public/js');
});
