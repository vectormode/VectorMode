var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass('app.scss');
    mix.scripts([
		'jquery-3.0.0.js',
		'bootstrap.min.js',
		'sweetalert.min.js',
		'jquery-ui.js'
    ], 'public/js/top.js');
    mix.scripts([
		'jquery.nicescroll.min.js',
		'icheck.min.js',
		'jquery.dataTables.js',
		'dataTables.tableTools.js',
		'validator.js',
		'moment.min2.js',
		'daterangepicker.js',
		'select2.full.js',
		'custom.js',
    ], 'public/js/bottom.js');
});
