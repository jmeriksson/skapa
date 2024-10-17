<?php
/**
 * Staff card component.
 * 
 * @package Skapa
 */

$default_args = [
    $post_object = null
];

$args = wp_parse_args($args, $default_args);
$staff_post = $args['post_object'];

if (! isset($staff_post) || ! $staff_post || empty($staff_post)) {
    return;
}

$title = $staff_post->post_title;
$id = $staff_post->ID;
$featured_image = get_the_post_thumbnail($id, 'medium', ['class' => 'object-cover w-full h-full']);
$pretty_title = get_field('pretty_title', $id) ?? null;
$position = get_field('position', $id) ?? null;
$description = get_field('description', $id) ?? null;

?>

<article>
    <figure class="aspect-[3/4]">
        <?php
            if (isset($featured_image) && !empty($featured_image)) {
                echo $featured_image;  
            } else {
                ?>
                <div class="w-full h-full bg-primary-light/20"></div>
                <?php
            }
        ?>
    </figure>
    <?php
        skapa_render_heading(
            isset($pretty_title) && !empty($pretty_title) ? $pretty_title : $title,
            'h3',
            ['mt-8']
        );
    ?>
    <?php if (isset($position) && !empty($position)) : ?>
        <p class="mt-4 italic"><?php echo esc_html($position); ?></p>
    <?php endif; ?>
    <?php if (isset($description) && !empty($description)) : ?>
        <p class="mt-4"><?php echo esc_html($description); ?></p>
    <?php endif; ?>
</article>