jQuery(document).ready(function($) {
	const handleCloseOffcanvas = () => {
		$('body').trigger('skapaToggleOverlay');
		$('body').trigger('skapaToggleOffcanvas');
	}
	
	$('#js-offcanvas-close').click(handleCloseOffcanvas);
	$('.js-mobile-menu-item').click(handleCloseOffcanvas);
})