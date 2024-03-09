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
    'classes' => [],
];

$args = wp_parse_args($args, $default_args);
$button_classes = ['py-2 px-8 rounded font-sans no-underline hover:no-underline transition text-base md:text-lg w-fit uppercase'];
$button_classes = array_merge($button_classes, $args['classes']);
if ($args['outline'] && $args['color'] === 'primary') {
    $button_classes[] = 'border border-primary text-primary hover:bg-primary-light hover:text-secondary';
} else if ($args['outline'] && $args['color'] === 'secondary') {
    $button_classes[] = 'border border-secondary text-secondary hover:bg-secondary-dark hover:text-primary';
} else if ($args['color'] === 'secondary') {
    $button_classes[] = 'bg-secondary hover:bg-secondary-dark text-primary';
} else {
    $button_classes[] = 'bg-primary hover:bg-primary-light text-secondary';
}
?>

<?php if ($args['url']) : ?>
    <a href="<?php echo esc_url($args['url']); ?>" class="<?php skapa_array_to_css_classes($button_classes); ?>" target="<?php echo esc_attr($args['target']); ?>">
        <?php echo esc_html($args['title']); ?>
    </a>
<?php else : ?>
    <button class="<?php echo esc_url($args['url']); ?>" class="<?php skapa_array_to_css_classes($button_classes); ?>">
        <?php echo esc_html($args['title']); ?>
    </button>
<?php endif; ?>