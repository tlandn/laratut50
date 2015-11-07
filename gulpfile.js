var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    elixir.config.sourcemaps = false;

    mix.sass('app.scss','resources/assets/css');

    mix.styles([
        'libs/bootstrap.min.css',
        'app.css',
        'libs/select2.min.css'
    ]);

    //mix.scripts([
    //    'libs/jquery.min.js',
    //    'libs/select2.min.js'
    //]);
	
	mix.livereload();
});
