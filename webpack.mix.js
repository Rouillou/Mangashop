const mix = require('laraval-mix');

mix.js('resources/js/app.jsx' , 'public/js')
    .sass('resources/css/app.css', 'public/css',)
    .react()