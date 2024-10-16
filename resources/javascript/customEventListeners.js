/**
 * This file holds all custom event listeners that are registered on the body element.
 */
document.addEventListener('DOMContentLoaded', function () {
	document.body.addEventListener('skapaToggleOffcanvas', () => {
		document.body.classList.toggle('offcanvas-is-open')
	})
})