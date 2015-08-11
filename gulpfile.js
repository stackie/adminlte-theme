var dir, elixir = require('laravel-elixir');

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

dir = {
  asset: {
    css: 'assets/css',
    img: 'assets/img',
    js: 'assets/js'
  },
  vendor: 'vendor/bower_components'
};

elixir(function(mix) {
  mix.less('style.less', dir.asset.css+'/style.css', {
    paths: [dir.vendor+'/']
  });
});
