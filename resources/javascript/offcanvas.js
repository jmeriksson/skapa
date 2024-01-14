jQuery(document).ready(function($) {
	const handleCloseOffcanvas = () => {
		$('body').trigger('skapaToggleOffcanvas');
	}
	
	$('#js-offcanvas-close').click(handleCloseOffcanvas);
	$('.js-mobile-menu-item').click(handleCloseOffcanvas);
	$('#js-offcanvas-overlay').click(handleCloseOffcanvas);
})