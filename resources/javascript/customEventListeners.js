/**
 * This file holds all custom event listeners that are registered on the body element.
 */
document.addEventListener('DOMContentLoaded', function () {
	document.body.addEventListener('skapaToggleOffcanvas', () => {
		document.body.classList.toggle('offcanvas-is-open')

		const offcanvasToggleButton = document.getElementById('js-mobile-menu-toggle')
		if (offcanvasToggleButton) {
			const isExpanded = offcanvasToggleButton.getAttribute('aria-expanded') === 'true'
			offcanvasToggleButton.setAttribute('aria-expanded', !isExpanded)
		}
	})
})