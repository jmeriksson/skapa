<?php
/**
 * This class handles the footer and UI elements in the footer.
 * 
 * @package
 */

namespace Skapa;

class Footer extends Loader {
    public function init() : void {
        add_action( 'wp_footer', [ $this, 'render_overlay' ] );
        add_action( 'wp_footer', [ $this, 'render_offcanvas' ] );
    }

    public function render_overlay() : void {
        get_template_part( '/templates/partials/overlay' );
    }

    public function render_offcanvas() : void {
        get_template_part( '/templates/partials/offcanvas' );
    }
}