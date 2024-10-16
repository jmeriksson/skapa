<?php
/**
 * Heading component
 *
 * @package Skapa
 */

$default_args = [
    'size' => 'h2',
    'text' => '',
    'classes' => []
];

$args = wp_parse_args($args, $default_args);
$args['classes'][] = $args['size'];

switch($args['size']) {
    case 'h1':
        ?>
            <h1 class="<?php skapa_array_to_css_classes($args['classes']); ?>"><?php echo esc_html( $args['text'] ); ?></h1>
        <?php
        break;
    // H2 is the default size
    case 'h3':
        ?>
            <h3 class="<?php skapa_array_to_css_classes($args['classes']); ?>"><?php echo esc_html( $args['text'] ); ?></h3>
        <?php
        break;
    case 'h4':
        ?>
            <h4 class="<?php skapa_array_to_css_classes($args['classes']); ?>"><?php echo esc_html( $args['text'] ); ?></h4>
        <?php
        break;
    case 'h5':
        ?>
            <h5 class="<?php skapa_array_to_css_classes($args['classes']); ?>"><?php echo esc_html( $args['text'] ); ?></h5>
        <?php
        break;
    case 'h6':
        ?>
            <h6 class="<?php skapa_array_to_css_classes($args['classes']); ?>"><?php echo esc_html( $args['text'] ); ?></h6>
        <?php
        break;
    default:
        ?>
            <h2 class="<?php skapa_array_to_css_classes($args['classes']); ?>"><?php echo esc_html( $args['text'] ); ?></h2>
        <?php
        break;
}
