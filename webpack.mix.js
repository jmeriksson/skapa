const mix = require('laravel-mix')

mix.copyDirectory( 'resources/images', 'assets/images' )

mix.js( 'resources/javascript/skapa.js', 'assets/javascript' )

mix.postCss('resources/css/skapa.css', 'assets/css', [
	require('tailwindcss'),
	require('postcss-nested')
])
.options({
	processCssUrls: false
})