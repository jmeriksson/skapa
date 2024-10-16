<?php
/**
 * The Header for the Skapa theme.
 * 
 * @package Skapa
 */

namespace Skapa;

class Header extends Loader {
    /**
     * Add hooks and filters here.
     *
     * @return void
     */
    public function init() : void {
        add_action('skapa_render_desktop_menu', [$this, 'render_desktop_menu']);
        add_action('skapa_render_mobile_menu_toggle', [$this, 'render_mobile_menu_toggle']);
    }

    /**
     * Renders the desktop menu.
     * 
     * @return void
     */
    public function render_desktop_menu() : void {
        $desktop_menu_args = [
            'theme_location' => 'primary_menu',
            'container' => 'div',
            'container_class' => 'hidden md:block',
            'echo' => true,
            'menu_class' => 'list-none m-0 p-0 flex flex-row gap-8 h-full',
            'add_anchor_class' => 'flex items-center h-full hover:underline'
        ];
        wp_nav_menu($desktop_menu_args);
    }

    /**
     * Renders the mobile menu toggle.
     * 
     * @return void
     */
    public function render_mobile_menu_toggle() : void {
        echo get_template_part('templates/partials/mobile-menu-toggle');
    }
}
