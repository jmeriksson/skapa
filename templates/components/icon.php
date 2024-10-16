<?php
/**
 * Icon component
 *
 * @package Skapa
 */

$default_args = [
    'icon' => 'facebook',
    'url' => false,
    'target' => '_self',
    'classes' => []
];

$args = wp_parse_args($args, $default_args);

if ( $args['url'] ) {
    ?>
        <a href="<?php echo esc_url( $args['url'] ); ?>" target="<?php echo esc_attr( $args['target'] ); ?>" class="<?php skapa_array_to_css_classes($args['classes']); ?>" aria-label="<?php echo esc_attr($args['icon']) ?>">
            <?php echo file_get_contents(get_stylesheet_directory() . '/assets/images/icons/' . $args['icon'] . '.svg'); ?>
        </a>
    <?php
} else {
    ?>
        <span class="<?php skapa_array_to_css_classes($args['classes']); ?>">
            <?php echo file_get_contents(get_stylesheet_directory() . '/assets/images/icons/' . $args['icon'] . '.svg'); ?>
        </span>
    <?php
}
