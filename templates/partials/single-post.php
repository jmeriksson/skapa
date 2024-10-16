<?php
/**
 * Default post template.
 * 
 * @package Skapa
 */

$header_color_classes = skapa_module_background_color('primary');
$padding_classes = skapa_module_background_classes();
$header_classes = array_merge($header_color_classes, $padding_classes);
$author = get_the_author();
$published_date = get_the_date();
?>

<article <?php post_class(); ?>>
    <header class="entry-header <?php skapa_array_to_css_classes($header_classes); ?>">
        <div class="container">
            <?php the_title('<h1 class="entry-title text-center mb-8">', '</h1>'); ?>
        </div>
        <div class="container container--narrow">
            <?php if ($author || $published_date) : ?>
                <div class="entry-meta text-center">
                    <?php if ($author) : ?>
                        <p class="!m-0"><?php printf( esc_html__('Written by: %s'), get_the_author() ); ?></p>
                    <?php endif; ?>
                    <?php if ($published_date) : ?>
                        <p class="!m-0"><?php printf( esc_html__('Published on: %s'), get_the_date() ); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </header>
    <div class="entry-content <?php skapa_array_to_css_classes($padding_classes); ?>">
        <div class="container container--narrow">
            <?php if (has_post_thumbnail()) : ?>
                <figure class="mb-8">
                    <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-auto']); ?>
                </figure>
            <?php endif; ?>
            <?php the_content(); ?>
        </div>
    </div>
</article>