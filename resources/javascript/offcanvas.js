document.addEventListener('DOMContentLoaded', function () {
	const handleCloseOffcanvas = () => {
		document.body.dispatchEvent(new Event('skapaToggleOffcanvas'))
	}

	document.getElementById('js-offcanvas-close').addEventListener('click', handleCloseOffcanvas)
	document.getElementById('js-offcanvas-overlay').addEventListener('click', handleCloseOffcanvas)
	const menuItems = document.getElementsByClassName('js-mobile-menu-item')
	for (let i = 0; i < menuItems.length; i++) {
		menuItems[i].addEventListener('click', handleCloseOffcanvas)
	}
})
