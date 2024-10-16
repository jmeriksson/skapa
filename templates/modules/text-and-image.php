<?php
/**
 * Module: Text and image
 * 
 * @package Skapa
 */

$layout = $args['layout'];
$image = $args['image'];
$heading = $args['heading'];
$heading_size = $args['heading_size'];
$wysiwyg = $args['wysiwyg'];
$button = $args['button'];
$background_color = $args['background_color'];

$module_classes = skapa_module_background_classes();
$module_classes = array_merge($module_classes, skapa_module_background_color($background_color));
$module_classes[] = 'relative';

$image_url = wp_get_attachment_image_url($image, 'full');

$text_column_classes = ['lg:col-span-6 flex flex-col gap-8'];
$image_column_classes = ['hidden lg:block lg:col-span-6'];

if ($layout === 'text-right') {
    $text_column_classes[] = 'lg:order-2';
    $image_column_classes[] = 'lg:order-1';
}

?>

<section class="<?php skapa_array_to_css_classes($module_classes); ?>">
    <div class="absolute w-full h-full inset-0 z-0 lg:hidden">
        <figure class="h-full opacity-10">
            <?php
            echo wp_get_attachment_image(
                $image,
                'full',
                false,
                [
                    'class' => 'object-cover w-full h-full',
                ]
            );
            ?>
        </figure>
    </div>
    <div class="relative z-10">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-16 lg:items-center ">
                <div class="<?php skapa_array_to_css_classes($text_column_classes); ?>">
                    <?php
                    if (isset($heading) && !empty($heading)) {
                        skapa_render_heading(
                            $heading,
                            $heading_size,
                            isset($background_color) && !empty($background_color) && $background_color === 'secondary'
                                ? ['text-primary']
                                : ['text-secondary']
                        );
                    }
                    ?>
                    <?php
                    if ($wysiwyg) {
                        get_template_part(
                            'templates/components/wysiwyg',
                            null,
                            [
                                'content' => $wysiwyg,
                            ]
                        );
                    }
                    ?>
                    <?php
                    if ($button) {
                        get_template_part(
                            'templates/components/button',
                            null,
                            [
                                'url' => $button['url'],
                                'title' => $button['title'],
                                'target' => $button['target'],
                                'color' => isset($background_color) && !empty($background_color) && $background_color === 'secondary'
                                    ? 'primary'
                                    : 'secondary',
                                'classes' => ['mx-auto lg:mx-0'],
                            ]
                        );
                    }
                    ?>
                </div>
                <div class="<?php skapa_array_to_css_classes($image_column_classes); ?>">
                    <figure class="h-full">
                        <?php
                        echo wp_get_attachment_image(
                            $image,
                            'medium_large',
                            false,
                            [
                                'class' => 'object-cover w-full h-full',
                            ]
                        );
                        ?>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>