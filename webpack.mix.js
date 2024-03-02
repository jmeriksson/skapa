const mix = require('laravel-mix')
require('tailwindcss');

mix.copyDirectory( 'resources/images', 'assets/images' )

mix.js( 'resources/javascript/skapa.js', 'assets/javascript' )

mix.postCss('resources/css/skapa.css', 'assets/css', [
	require('postcss-nested'),
	require('postcss-import'),
	require('tailwindcss'),
])

.options({
	processCssUrls: false
})