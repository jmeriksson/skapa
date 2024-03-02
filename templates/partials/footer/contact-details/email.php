<?php
/**
 * Email partial. For use in the footer.
 * 
 * @package Skapa
 */

$value = $args['value'] ?? null;

if (!$value) {
    return;
}

?>

<div>
    <a target="_blank" href="mailto:<?php echo esc_attr($value); ?>">
        <?php echo esc_html($value); ?>
    </a>
</div>