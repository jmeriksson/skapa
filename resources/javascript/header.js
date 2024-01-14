jQuery(document).ready(function($) {
	$('#js-mobile-menu-toggle').click(() => {
		$('body').trigger('skapaToggleOverlay');
		$('body').trigger('skapaToggleOffcanvas');
	})
})
