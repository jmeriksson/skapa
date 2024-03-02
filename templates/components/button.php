<?php
/**
 * Button component
 *
 * @package Skapa
 */

$default_args = [
    'url' => null,
    'title' => '',
    'target' => '_self',
    'color' => 'primary',
    'outline' => false,
];

$args = wp_parse_args($args, $default_args);
$button_classes = ['py-2 px-8 rounded font-sans no-underline hover:no-underline transition'];
if ($args['color'] === 'secondary') {
    $button_classes[] = 'bg-secondary hover:bg-secondary-dark text-primary';
} else {
    $button_classes[] = 'bg-primary hover:bg-primary-light text-secondary';
}
?>

<?php if ($args['url']) : ?>
    <a href="<?php echo esc_url($args['url']); ?>" class="<?php echo esc_attr(implode(' ', $button_classes)); ?>" target="<?php echo esc_attr($args['target']); ?>">
        <?php echo esc_html($args['title']); ?>
    </a>
<?php else : ?>
    <button class="<?php echo esc_url($args['url']); ?>" class="<?php echo esc_attr(implode(' ', $button_classes)); ?>">
        <?php echo esc_html($args['title']); ?>
    </button>
<?php endif; ?>