<?php
/**
 * WYSIWYG component
 *
 * @package Skapa
 */

$default_args = [
    'content' => '',
];

$args = wp_parse_args($args, $default_args);

?>
<div class="wysiwyg">
    <?php echo wp_kses_post($args['content']); ?>
</div>