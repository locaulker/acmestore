var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

var gulp = require('gulp');

elixir(function(mix) {
  // compile SASS to CSS
  mix.sass('resources/assets/sass/app.scss', 'resources/assets/css');

  // bundle css files into one file
  mix.styles(
    [
      'css/app.css',
      'bower/vendor/slick-carousel/slick/slick.css',

    ], 'public/css/bundle.css', 'resources/assets'
  );

  var bowerPath = 'bower/vendor';
  mix.scripts(
    [
      // jQuery
      bowerPath + '/jquery/dist/jquery.min.js',

      // foundation
      bowerPath + '/foundation-sites/dist/js/foundation.min.js',

      // pother-dependencies: slick-carousel
      bowerPath + '/slick-carousel/slick/slick.min.js',

      // Others
      'js/*.js',

    ], 'public/js/bundle.js', 'resources/assets'
  );
});