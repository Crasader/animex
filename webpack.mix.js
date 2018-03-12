let mix = require('laravel-mix');

// mix.js('resources/assets/js/app.js', 'public/js')

mix.sass(
    'resources/assets/sass/public/clean-blog.scss',
    'public/css/clean-blog.min.css'
).sourceMaps();

mix.browserSync({
    proxy: 'animex.local'
});
