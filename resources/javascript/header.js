
document.addEventListener('DOMContentLoaded', function () {
	document.getElementById('js-mobile-menu-toggle').addEventListener('click', () => {
		document.body.dispatchEvent(new Event('skapaToggleOffcanvas'))
	})
})
