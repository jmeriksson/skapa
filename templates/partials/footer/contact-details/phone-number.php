<?php
/**
 * Phone number partial. For use in the footer.
 * 
 * @package Skapa
 */

$label = $args['label'] ?? null;
$value = $args['value'] ?? null;

if (!$value) {
    return;
}

?>

<div>
    <a target="_blank" href="tel:<?php echo esc_attr($value); ?>">
        <?php
            if ($label) {
                echo esc_html($label);
            } else {
                echo esc_html($value);
            }
        ?>
    </a>
</div>