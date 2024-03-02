<?php
/**
 * Module: Hero
 * 
 * @package Skapa
 */

$background_type = $args['background_type'];
$background_image = $args['background_image'] ?? null;
$background_color = $args['background_color'] ?? null;
$text_color = $args['text_color'] ?? null;
$overlay = $args['overlay'] ?? null;
$height = $args['height'] ?? 'large';
$heading = $args['heading'] ?? null;
$subheading = $args['subheading'] ?? null;
$button = $args['button'] ?? null;

$background_classes = [''];
$content_classes = [''];
$overlay_classes = [''];
$button_color = 'primary';
$aspect_ratio_classes = ['aspect-[3/4] sm:aspect-[1/1]'];
switch ($height) {
    case 'small':
        $aspect_ratio_classes[] = 'md:aspect-[21/9]';
        break;
    default:
        $aspect_ratio_classes[] = 'md:aspect-[16/9] 2xl:aspect-[21/9]';
        break;
}

if ($background_type === 'color' && $background_color) {
    $background_classes[] = 'module-' . $background_color;
    $content_classes[] = 'flex items-center justify-center';
    $content_classes = array_merge($content_classes, $aspect_ratio_classes);
    switch ($background_color) {
        case 'primary':
            $button_color = 'secondary';
            break;
        default:
            $button_color = 'primary';
            break;
    }
}
if ($background_type === 'image' && $background_image) {
    $background_classes[] = 'relative';
    $content_classes[] = 'absolute inset-0 w-full h-full flex justify-center items-center';
    $content_classes = array_merge($content_classes, $aspect_ratio_classes);
    switch ($text_color) {
        case 'primary':
            $background_classes[] = 'text-primary';
            break;
        default:
        $background_classes[] = 'text-secondary';
            break;
    }
}
if ($overlay) {
    $overlay_classes[] = 'w-full h-full absolute inset-0 opacity-30';
    if ($text_color === 'primary') {
        $overlay_classes[] = 'bg-secondary';
    } else {
        $overlay_classes[] = 'bg-primary';
    }
}

?>

<div>
    <div class='<?php skapa_array_to_css_classes($background_classes); ?>'>
        <?php if ($background_type === 'image' && $background_image) : ?>
            <figure class='<?php skapa_array_to_css_classes($aspect_ratio_classes); ?>'>
                <?php
                echo wp_get_attachment_image(
                    $background_image,
                    'large',
                    false,
                    [
                        'class' => 'object-cover w-full h-full',
                    ]
                );
                ?>
            </figure>
        <?php endif; ?>
        <?php if ($overlay && $background_type === 'image') : ?>
            <div class='<?php skapa_array_to_css_classes($overlay_classes); ?>'></div>
        <?php endif; ?>
        <div class='<?php skapa_array_to_css_classes($content_classes); ?>'>
            <div class='container'>
                <div class='flex flex-col items-center mx-auto max-w-5xl'>
                    <?php if ($heading) : ?>
                        <h1 class='h1 text-center'><?php echo esc_html($heading); ?></h1>
                    <?php endif; ?>
    
                    <?php if ($subheading) : ?>
                        <p class='text-xl lg:text-3xl text-center uppercase'><?php echo esc_html($subheading); ?></p>
                    <?php endif; ?>
    
                    <?php
                    if ($button) {
                        get_template_part(
                            'templates/components/button',
                            null,
                            [
                                'title' => $button['title'],
                                'url' => $button['url'],
                                'color' => $button_color,
                                'target' => $button['target'],
                                'classes' => ['mt-8']
                            ]
                        );
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>