/**
 * This file holds all custom event listeners that are registered on the body element.
 */

jQuery(document).ready(function($) {
	// skapaToggleOffcanvas
	$('body').on('skapaToggleOffcanvas', () => {
		$('body').toggleClass('offcanvas-is-open');
	})
})