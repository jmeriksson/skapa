jQuery(document).ready(function($) {
	$('#js-mobile-menu-toggle').click(() => {
		$('body').trigger('skapaToggleOffcanvas');
	})
})
