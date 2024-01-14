/**
 * This file holds all custom event listeners that are registered on the body element.
 */

jQuery(document).ready(function($) {
	// skapaToggleOverlay
	$('body').on('skapaToggleOverlay', () => {
		$('body').toggleClass('overlay-is-open');
		setTimeout(() => {
			$('body').toggleClass('overlay-is-visible');
		}, 10)
	})

	// skapaToggleOffcanvas
	$('body').on('skapaToggleOffcanvas', () => {
		console.log('skapaToggleOffcanvas')
		$('body').toggleClass('offcanvas-is-open');
	})
})