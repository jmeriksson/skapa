jQuery(document).ready(function($) {
	$('#js-overlay').click(() => {
		$('body').trigger('skapaToggleOverlay');
		if ($('body').hasClass('offcanvas-is-open')) {
			$('body').trigger('skapaToggleOffcanvas');
		}
	})
})