<?php
/**
 * This class handles the footer and UI elements in the footer.
 * 
 * @package Skapa
 */

namespace Skapa;

class Footer extends Loader {
    public function init() : void {
        add_action( 'wp_footer', [ $this, 'render_offcanvas' ] );
    }

    public function render_offcanvas() : void {
        get_template_part( '/templates/partials/offcanvas' );
    }
}