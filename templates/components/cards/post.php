<?php
/**
 * Post card component.
 * 
 * @package Skapa
 */

$default_args = [
    $post_object = null
];

$args = wp_parse_args($args, $default_args);
$post = $args['post_object'];

if (! isset($post) || ! $post || empty($post)) {
    return;
}

$title = $post->post_title;
$id = $post->ID;
$date = $post->post_date;
$author_id = $post->post_author;
$author_name = get_the_author_meta('display_name', $author_id);
$excerpt = get_the_excerpt($id);
$featured_image = get_the_post_thumbnail($id, 'medium_large', ['class' => 'object-cover w-full h-full']);
$background_color = $args['background_color'] ?? 'primary';
$fallback_image_color = $background_color === 'primary' ? 'bg-secondary-light/20' : 'bg-primary-light/20';
$url = get_permalink($id);

?>

<article class="grid grid-cols-4 gap-8">
    <figure class="aspect-square col-span-1 hidden md:block">
        <?php
            if (isset($featured_image) && !empty($featured_image)) {
                echo $featured_image;  
            } else {
                ?>
                <div class="w-full h-full <?php echo esc_attr($fallback_image_color) ?>"></div>
                <?php
            }
        ?>
    </figure>
    <div class="overflow-hidden col-span-full md:col-span-3 line-clamp-6 md:line-clamp-5 lg:line-clamp-6">
        <h3><a class="no-underline hover:underline" href="<?php echo esc_url($url); ?>"><?php echo esc_html($title); ?></a></h3>
        <p class="text-sm italic !mb-0"><?php echo esc_html($author_name); ?></p>
        <p class="mt-4"><?php echo esc_html($excerpt); ?></p>
    </div>
</article>