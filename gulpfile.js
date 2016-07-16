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
		'libs/top/jquery-3.0.0.js',
		'libs/top/bootstrap.min.js',
		'libs/top/sweetalert.min.js',
		'libs/top/jquery-ui.js'
    ], 'public/js/top.js');
    mix.scripts([
		'libs/bottom/jquery.nicescroll.min.js',
		'libs/bottom/icheck.min.js',
		'libs/bottom/jquery.dataTables.js',
		'libs/bottom/dataTables.tableTools.js',
		'libs/bottom/validator.js',
		'libs/bottom/moment.min2.js',
		'libs/bottom/daterangepicker.js',
		'libs/bottom/select2.full.js',
		'libs/bottom/vue/accounting.min.js',
		'libs/bottom/vue/Sortable.js',
		'libs/bottom/vue/vue.js',
		'custom.js',
    ], 'public/js/bottom.js');
});
