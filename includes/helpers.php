<?php
/**
 * Helper functions.
 * 
 * @package Skapa
 */

if (!function_exists('skapa_module_background_classes')) {
    /**+
     * Returns an array of base classes for the modules.
     */
    function skapa_module_background_classes() : array {
        return ['py-11 lg:py-16'];
    }
}

if (!function_exists('skapa_module_background_color')) {
    /**
     * Returns an array of class names for background color and text color.
     *
     * @param string $background_color Background color to use.
     * @return array
     */
    function skapa_module_background_color(string $background_color) : array {
        switch ($background_color) {
            case 'secondary':
                return ['bg-secondary text-primary'];
            default:
                return ['bg-primary text-secondary'];
        }
    }
}

if (!function_exists('skapa_render_heading')) {
    /**
     * Echoes a heading component.
     *
     * @param string $text Text to display in the heading.
     * @param string $size Size of the heading (defaults to h2).
     * @param array $classes Array of additional classes to add to the heading.
     * @return void
     */
    function skapa_render_heading(string $text, string $size = 'h2', array $classes = []) : void {
        echo get_template_part(
            'templates/components/heading',
            null,
            [
                'text' => $text,
                'size' => $size,
                'classes' => $classes
            ]
        );
    }
}

if (!function_exists('skapa_array_to_css_classes')) {
    /**
     * Converts an array of classes to a string of CSS classes.
     *
     * @param array $classes Array of classes to convert.
     * @return void
     */
    function skapa_array_to_css_classes(array $classes) : void {
        echo esc_attr(implode(' ', $classes));
    }
}

if (!function_exists('skapa_render_staff_card')) {
    /**
     * Renders a staff card component.
     *
     * @param WP_Post $staff_post Staff post object.
     * @param string $background_color Background to place card on.
     * @return void
     */
    function skapa_render_staff_card(WP_Post $staff_post, string $background_color) : void {
        echo get_template_part(
            'templates/components/cards/staff',
            null,
            [
                'post_object' => $staff_post,
                'background_color' => $background_color
            ]
        );
    }
}

if (!function_exists('skapa_render_post_card')) {
    /**
     * Renders a post card component.
     *
     * @param WP_Post $post Post object.
     * @param string $background_color Background to place card on.
     * @return void
     */
    function skapa_render_post_card(WP_Post $post, string $background_color) : void {
        echo get_template_part(
            'templates/components/cards/post',
            null,
            [
                'post_object' => $post,
                'background_color' => $background_color
            ]
        );
    }
}