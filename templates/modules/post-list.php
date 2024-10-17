<?php
/**
 * Module: Post List
 * 
 * @package Skapa
 */

$heading = $args['heading'] ?? null;
$heading_size = $args['heading_size'] ?? 'h2';
$posts = $args['posts'];
$background_color = $args['background_color'];

if (!$posts || empty($posts) || !is_array($posts)) {
    return;
}

$module_classes = skapa_module_background_classes();
$module_classes = array_merge($module_classes, skapa_module_background_color($background_color));

?>

<section class="<?php skapa_array_to_css_classes($module_classes); ?>">
    <div class="container">
        <?php
            if (isset($heading) && !empty($heading)) {
                skapa_render_heading(
                    $heading,
                    $heading_size,
                    $background_color === 'primary' ? ['text-secondary mb-8'] : ['mb-8']
                );
            }
        ?>
        <div class="flex flex-col gap-16">
            <?php
                foreach($posts as $post) {
                    skapa_render_post_card($post, $background_color);
                }
            ?>
        </div>
    </div>
</section>